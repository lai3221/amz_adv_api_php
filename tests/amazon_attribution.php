<?php

// Standalone offline checks. Run with: php tests/amazon_attribution.php
// Namespace-local cURL doubles exercise Client::operation and executeRequest
// while recording transport options without contacting Amazon or using credentials.
namespace AmazonAdvertisingApi {
    class AttributionTestTransport
    {
        public static $lastRequest;
        public static $response = '{"reports":[],"size":0,"cursorId":null}';
        public static $httpCode = 200;
    }

    function curl_init()
    {
        $request = new \stdClass();
        $request->options = [];
        $request->closed = false;
        AttributionTestTransport::$lastRequest = $request;
        return $request;
    }

    function curl_setopt($request, $name, $value)
    {
        $request->options[$name] = $value;
        return true;
    }

    function curl_exec($request)
    {
        $callback = $request->options[CURLOPT_HEADERFUNCTION];
        $method = new \ReflectionMethod($callback[0], $callback[1]);
        $method->setAccessible(true);
        $method->invoke($callback[0], $request, "x-amzn-RequestId: offline-test\r\n");
        return AttributionTestTransport::$response;
    }

    function curl_getinfo($request)
    {
        return [
            'http_code' => AttributionTestTransport::$httpCode,
            'url' => $request->options[CURLOPT_URL],
        ];
    }

    function curl_close($request)
    {
        $request->closed = true;
    }
}

namespace {
    use AmazonAdvertisingApi\AttributionTestTransport;
    use AmazonAdvertisingApi\Client;

    spl_autoload_register(function ($class) {
        $prefix = 'AmazonAdvertisingApi\\';
        if (strncmp($class, $prefix, strlen($prefix)) === 0) {
            $path = __DIR__ . '/../src/' . substr($class, strlen($prefix)) . '.php';
            if (is_file($path)) {
                require_once $path;
            }
        }
    });

    function attributionAssertSame($expected, $actual, $label)
    {
        if ($expected !== $actual) {
            throw new \RuntimeException(
                $label . ': expected ' . var_export($expected, true)
                . ', received ' . var_export($actual, true)
            );
        }
    }

    $config = array_merge(require __DIR__ . '/../src/config/amazon_adv_api.php', [
        'clientId' => 'amzn1.application-oa2-client.' . str_repeat('0', 32),
        'clientSecret' => str_repeat('0', 64),
        'region' => 'na',
        'accessToken' => 'Atza|offline-test',
        'appUserAgent' => 'attribution-offline-test',
        'headerAccept' => 'application/vnd.existing.v3+json',
    ]);
    $client = new Client($config);
    $client->profileId = '1234567890';
    $reportData = [
        'advertiserIds' => '1234567890,9876543210',
        'startDate' => '20261001',
        'endDate' => '20261007',
        'reportType' => 'PERFORMANCE',
        'groupBy' => 'CAMPAIGN',
        'metrics' => 'attributedPurchases14d,attributedSales14d',
        'count' => 100,
        'cursorId' => null,
    ];
    $cases = [
        ['getAdvertisersByProfile', [], 'GET', 'attribution/advertisers'],
        ['getPublishers', [], 'GET', 'attribution/publishers'],
        [
            'getPublisherAttributionTagTemplate',
            [['publisherIds' => ['1', '2'], 'advertiserIds' => ['123', '456']]],
            'GET',
            'attribution/tags/macroTag?publisherIds=1&publisherIds=2&advertiserIds=123&advertiserIds=456',
        ],
        [
            'getPublisherMacroAttributionTag',
            [['publisherIds' => ['9', '10']]],
            'GET',
            'attribution/tags/nonMacroTemplateTag?publisherIds=9&publisherIds=10',
        ],
        ['getAttributionTagsByCampaign', [$reportData], 'POST', 'attribution/report'],
    ];

    foreach ($cases as $case) {
        list($method, $arguments, $verb, $path) = $case;
        $result = call_user_func_array([$client, $method], $arguments);
        $request = AttributionTestTransport::$lastRequest;
        attributionAssertSame('https://advertising-api.amazon.com/' . $path, $request->options[CURLOPT_URL], $method . ' URL');
        attributionAssertSame($verb, $request->options[CURLOPT_CUSTOMREQUEST], $method . ' verb');
        attributionAssertSame([
            'Authorization: bearer Atza|offline-test',
            'User-Agent: attribution-offline-test',
            'Amazon-Advertising-API-ClientId: ' . $config['clientId'],
            'Amazon-Advertising-API-Scope: 1234567890',
            'Accept: application/json',
            'Content-Type: application/json',
        ], $request->options[CURLOPT_HTTPHEADER], $method . ' scoped JSON headers');
        attributionAssertSame(true, $result['success'], $method . ' success');
        attributionAssertSame(200, $result['code'], $method . ' status');
        attributionAssertSame('offline-test', $result['requestId'], $method . ' request ID');
        attributionAssertSame(AttributionTestTransport::$response, $result['response'], $method . ' response passthrough');
        attributionAssertSame(true, $request->closed, $method . ' closes request');
        if ($verb === 'POST') {
            attributionAssertSame($reportData, json_decode($request->options[CURLOPT_POSTFIELDS], true), $method . ' JSON body');
        } else {
            attributionAssertSame(false, isset($request->options[CURLOPT_POSTFIELDS]), $method . ' has no body');
        }
    }

    // Preserve every ID and encode reserved characters in repeated query values.
    $client->getPublisherAttributionTagTemplate([
        'publisherIds' => ['publisher /+&=', '2'],
        'advertiserIds' => ['9223372036854775807'],
    ]);
    attributionAssertSame(
        'https://advertising-api.amazon.com/attribution/tags/macroTag'
        . '?publisherIds=publisher%20%2F%2B%26%3D&publisherIds=2&advertiserIds=9223372036854775807',
        AttributionTestTransport::$lastRequest->options[CURLOPT_URL],
        'Query encoding preserves reserved characters and large identifiers'
    );

    // Pagination cursors, including embedded quotes and backslashes, round-trip as JSON.
    $reportData['reportType'] = 'PRODUCTS';
    unset($reportData['groupBy']);
    $reportData['cursorId'] = 'next "page" \\ cursor';
    $client->getAttributionTagsByCampaign($reportData);
    attributionAssertSame(
        $reportData,
        json_decode(AttributionTestTransport::$lastRequest->options[CURLOPT_POSTFIELDS], true),
        'PRODUCTS report and cursor are forwarded unchanged'
    );

    // Endpoint-specific headers must not leak into the next existing API call.
    $client->listProfiles();
    attributionAssertSame([
        'Authorization: bearer Atza|offline-test',
        'User-Agent: attribution-offline-test',
        'Amazon-Advertising-API-ClientId: ' . $config['clientId'],
        'Amazon-Advertising-API-Scope: 1234567890',
        'Accept: application/vnd.existing.v3+json',
        'Content-Type: application/vnd.existing.v3+json',
    ], AttributionTestTransport::$lastRequest->options[CURLOPT_HTTPHEADER], 'Existing headers are preserved');
    $client->getAdvertiserInvoices(['count' => 10, 'cursor' => 'a b&c']);
    attributionAssertSame(
        'https://advertising-api.amazon.com/invoices?count=10&cursor=a%20b%26c',
        AttributionTestTransport::$lastRequest->options[CURLOPT_URL],
        'Existing scalar query encoding is preserved'
    );

    // Default empty headerAccept still produces JSON headers at the EU endpoint.
    $config['region'] = 'eu';
    $config['headerAccept'] = '';
    $euClient = new Client($config);
    $euClient->profileId = '9876543210';
    $euClient->getPublishers();
    attributionAssertSame('https://advertising-api-eu.amazon.com/attribution/publishers', AttributionTestTransport::$lastRequest->options[CURLOPT_URL], 'EU endpoint');
    attributionAssertSame(true, in_array('Amazon-Advertising-API-Scope: 9876543210', $euClient->headers, true), 'EU profile scope');
    attributionAssertSame(true, in_array('Accept: application/json', $euClient->headers, true), 'JSON accept without headerAccept');
    attributionAssertSame(true, in_array('Content-Type: application/json', $euClient->headers, true), 'JSON content type without headerAccept');

    // Failure responses retain the standard client contract.
    AttributionTestTransport::$httpCode = 400;
    AttributionTestTransport::$response = '{"code":"INVALID_REQUEST","details":"Invalid request"}';
    $result = $euClient->getAttributionTagsByCampaign($reportData);
    attributionAssertSame(false, $result['success'], 'API failure status');
    attributionAssertSame(400, $result['code'], 'API failure HTTP code');
    attributionAssertSame(json_decode(AttributionTestTransport::$response, true), $result['response'], 'API failure body');
    attributionAssertSame('offline-test', $result['requestId'], 'API failure request ID');

    echo "Amazon Attribution offline request checks passed.\n";
}
