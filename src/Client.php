<?php

namespace AmazonAdvertisingApi;

use Exception;

require_once 'Versions.php';
require_once 'Regions.php';
require_once 'CurlRequest.php';

/**
 * Class Client
 * Contains requests' wrappers of Amazon Ads API
 */
class Client
{
    use SponsoredProductsRequests;
    use SponsoredBrandsRequests;
    use SponsoredDisplayRequests;
    use ProductEligibilityRequests;
    use AccountRequests;
    use ReportingRequests;

    public const CAMPAIGN_TYPE_SPONSORED_PRODUCTS_FULL = 'sponsoredProducts';
    public const CAMPAIGN_TYPE_SPONSORED_BRANDS_FULL = 'sponsoredBrands';
    public const CAMPAIGN_TYPE_SPONSORED_DISPLAY_FULL = 'sponsoredDisplay';
    public const CAMPAIGN_TYPE_SPONSORED_PRODUCTS = 'sp';
    public const CAMPAIGN_TYPE_SPONSORED_BRANDS = 'sb';
    public const CAMPAIGN_TYPE_SPONSORED_DISPLAY = 'sd';

    private $config = [
        'clientId' => null,
        'clientSecret' => null,
        'region' => null,
        'accessToken' => null,
        'refreshToken' => null,
        'sandbox' => false,
        'saveFile' => true,
        'apiVersion' => 'v1',
        'sbVersion' => 'v4',
        'sdVersion' => 'v3',
        'spVersion' => 'v3',
        'portfoliosVersion' => 'v1',
        'reportsVersion' => 'v3',
        'deleteGzipFile' => false,
        'isUseProxy' => false,
        'guzzleProxy' => '',
        'curlProxy' => '',
        'appUserAgent' => '',
        'headerAccept' => '',
    ];

    private $apiVersion;
    private $sbVersion;
    private $sdVersion;
    private $spVersion;
    private $portfoliosVersion;
    private $reportsVersion;
    private $applicationVersion;
    public $campaignTypePrefix;
    private $userAgent;
    private $isUseProxy = false;
    private $endpoint = null;
    private $tokenUrl = null;
    private $requestId = null;
    private $endpoints;
    private $versionStrings;
    private $headerAccept;
    public $profileId = null;
    public $headers = [];

    /**
     * Client constructor.
     * @param $config
     * @throws Exception
     */
    public function __construct($config)
    {
        $this->config = $config;
        $regions = new Regions();
        $this->endpoints = $regions->endpoints;
        $versions = new Versions();
        $this->versionStrings = $versions->versionStrings;
        $this->apiVersion = $config['apiVersion'] ?? '';
        $this->sbVersion = $config['sdVersion'] ?? '';
        $this->spVersion = $config['spVersion'] ?? '';
        $this->portfoliosVersion = $config['portfoliosVersion'] ?? '';
        $this->reportsVersion = $config['reportsVersion'] ?? '';
        $this->apiVersion = is_null($this->apiVersion) ? $this->versionStrings['apiVersion'] : $this->apiVersion;
        $this->applicationVersion = $this->versionStrings['applicationVersion'];
        $this->userAgent = $config['appUserAgent'];
        $this->headerAccept = $config['headerAccept'] ?? '';
        $this->validateConfig($config);
        $this->validateConfigParameters();
        $this->setEndpoints();

        if (is_null($this->config['accessToken']) && !is_null($this->config['refreshToken'])) {
            $this->doRefreshToken();
        }
    }

    /**
     * @param string $name
     * @param $value
     */
    public function __set(string $name, $value)
    {
        if (isset($this->{$name})) {
            $this->{$name} = $value;
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function doRefreshToken(): array
    {
        $headers = array(
            'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
            "User-Agent: $this->userAgent"
        );

        $refresh_token = rawurldecode($this->config['refreshToken']);

        $params = array(
            'grant_type' => 'refresh_token',
            'refresh_token' => $refresh_token,
            'client_id' => $this->config['clientId'],
            'client_secret' => $this->config['clientSecret']
        );

        $data = "";
        foreach ($params as $k => $v) {
            $data .= "$k=" . rawurlencode($v) . "&";
        }

        $url = "https://$this->tokenUrl";

        $request = new CurlRequest($this->config);
        $request->setOption(CURLOPT_URL, $url);
        $request->setOption(CURLOPT_HTTPHEADER, $headers);
        $request->setOption(CURLOPT_USERAGENT, $this->userAgent);
        $request->setOption(CURLOPT_POST, true);
        $request->setOption(CURLOPT_POSTFIELDS, rtrim($data, "&"));

        $response = $this->executeRequest($request);

        $response_array = json_decode($response['response'], true);
        if (is_array($response_array) && array_key_exists("access_token", $response_array)) {
            $this->config['accessToken'] = $response_array['access_token'];
        } else {
            $this->logAndThrow("Unable to refresh token. 'access_token' not found in response. " . print_r($response,
                    true));
        }

        return $response;
    }

    /**
     * @param $location
     * @param bool $gunzip
     * @return array
     */
    public function download($location, bool $gunzip = false): array
    {
        $request = new CurlRequest($this->config);
        $request->setOption(CURLOPT_URL, $location);
        if ($this->config['saveFile'] && $gunzip) {
            return $this->saveDownloaded($request);
        }
        if ($gunzip) {
            $response = $this->executeRequest($request);
            $response['response'] = gzdecode($response['response']);
            return $response;
        }
        return $this->executeRequest($request);
    }

    /**
     * Save *.json.gz file, extract it, remove .gz file
     * and set into response path to json file
     * @param CurlRequest $request
     * @return array
     */
    protected function saveDownloaded(CurlRequest $request): array
    {
        $filePath = uniqid(microtime(true) . '_amzn_ads_') . '.json.gz';
        $tmpFile = fopen($filePath, 'w+');
        $request->setOption(CURLOPT_HEADER, 0);
        $request->setOption(CURLOPT_FOLLOWLOCATION, 1);
        $request->setOption(CURLOPT_FILE, $tmpFile);
        $response = $this->executeRequest($request);
        if ($response['success']) {
            $extractedFile = $this->extractFile($filePath);
            fclose($tmpFile);
            $response['response_type'] = 'file';
            $response['response'] = $extractedFile;
        } else {
            fclose($tmpFile);
            unlink($filePath);
        }
        return $response;
    }

    /**
     * @param string $filePath
     * @return string
     */
    protected function extractFile(string $filePath): string
    {
        $bufferSize = 4096; // read 4kb at a time
        $unzipFilePath = str_replace('.gz', '', $filePath);
        $file = gzopen($filePath, 'rb');
        $unzippedFile = fopen($unzipFilePath, 'wb');

        while (!gzeof($file)) {
            fwrite($unzippedFile, gzread($file, $bufferSize));
        }
        fclose($unzippedFile);
        gzclose($file);

        return $unzipFilePath;
    }

    /**
     * @param string $interface
     * @param array|null $params
     * @param string $method
     * @param bool $needAccept
     * @return array
     * @throws Exception
     */
    private function operation(
        string $interface,
        ?array $params = [],
        string $method = "GET",
        bool   $needAccept = true
    ): array
    {
        $headers = array(
            'Authorization: bearer ' . $this->config['accessToken'],
            'User-Agent: ' . $this->userAgent,
            'Amazon-Advertising-API-ClientId: ' . $this->config['clientId'],
        );
        if (!is_null($this->profileId)) {
            $headers[] = 'Amazon-Advertising-API-Scope: ' . $this->profileId;
        }
        if ($this->headerAccept) {
            if ($needAccept) {
                $headers[] = 'Accept: ' . $this->headerAccept;
            }
            $headers[] = 'Content-Type: ' . $this->headerAccept;
        }
        $this->headers = $headers;
        $request = new CurlRequest($this->config);
        $this->endpoint = trim($this->endpoint, "/");
        $url = "$this->endpoint/$interface";
        $this->requestId = null;
        switch (strtolower($method)) {
            case 'get':
                if (!empty($params)) {
                    $url .= '?';
                    foreach ($params as $k => $v) {
                        $url .= "$k=" . rawurlencode($v) . '&';
                    }
                    $url = rtrim($url, '&');
                }
                break;
            case 'put':
            case 'post':
            case 'delete':
                if (!empty($params)) {
                    $data = json_encode($params);
                    $request->setOption(CURLOPT_POST, true);
                    $request->setOption(CURLOPT_POSTFIELDS, $data);
                }
                break;
            default:
                $this->logAndThrow("Unknown verb $method.");
        }
        $request->setOption(CURLOPT_URL, $url);
        $request->setOption(CURLOPT_HTTPHEADER, $headers);
        $request->setOption(CURLOPT_USERAGENT, $this->userAgent);
        $request->setOption(CURLOPT_CUSTOMREQUEST, strtoupper($method));
        return $this->executeRequest($request);
    }

    /**
     * @param CurlRequest $request
     * @return array
     */
    protected function executeRequest(CurlRequest $request): array
    {
        $response = $request->execute();
        $this->requestId = $request->requestId;
        $response_info = $request->getInfo();
        $request->close();
        if ($response_info['http_code'] == 307) {
            /* application/octet-stream */
            return $this->download($response_info['redirect_url'], true);
        }

        if (!preg_match("/^(2|3)\d{2}$/", $response_info['http_code'])) {
            $requestId = 0;
            $json = json_decode($response, true);
            if (!is_null($json)) {
                if (array_key_exists('requestId', $json)) {
                    $requestId = json_decode($response, true)['requestId'];
                }
            }
            return array(
                'success' => false,
                'code' => $response_info['http_code'],
                'response' => is_array($response) ? $response : $json,
                'responseInfo' => $response_info,
                'requestId' => $requestId
            );
        } else {
            return array(
                'success' => true,
                'code' => $response_info['http_code'],
                'responseInfo' => $response_info,
                'response' => $response,
                'requestId' => $this->requestId
            );
        }
    }

    /**
     * @param $config
     * @return bool
     * @throws Exception
     */
    private function validateConfig($config): bool
    {
        if (is_null($config)) {
            $this->logAndThrow("'config' cannot be null.");
        }

        foreach ($config as $k => $v) {
            if (array_key_exists($k, $this->config)) {
                $this->config[$k] = $v;
            } else {
                $this->logAndThrow("Unknown parameter $k in config.");
            }
        }
        return true;
    }

    /**
     * @return bool
     * @throws Exception
     */
    private function validateConfigParameters(): bool
    {
        foreach ($this->config as $k => $v) {
            if (is_null($v) && $k !== 'accessToken' && $k !== 'refreshToken') {
                $this->logAndThrow("Missing required parameter $k.");
            }
            switch ($k) {
                case 'clientId':
                    if (!preg_match("/^amzn1\.application-oa2-client\.[a-z0-9]{32}$/i", $v)) {
                        $this->logAndThrow('Invalid parameter value for clientId.');
                    }
                    break;
                case 'clientSecret':
                    if (!preg_match("/^[a-z0-9]{64}$/i", $v)) {
                        $this->logAndThrow('Invalid parameter value for clientSecret.');
                    }
                    break;
                case 'accessToken':
                    if (!is_null($v)) {
                        if (!preg_match("/^Atza(\||%7C|%7c).*$/", $v)) {
                            $this->logAndThrow('Invalid parameter value for accessToken.');
                        }
                    }
                    break;
                case 'refreshToken':
                    if (!is_null($v)) {
                        if (!preg_match("/^Atzr(\||%7C|%7c).*$/", $v)) {
                            $this->logAndThrow('Invalid parameter value for refreshToken.');
                        }
                    }
                    break;
                case 'sandbox':
                    if (!is_bool($v)) {
                        $this->logAndThrow('Invalid parameter value for sandbox.');
                    }
                    break;
                case 'saveFile':
                    if (!is_bool($v)) {
                        $this->logAndThrow('Invalid parameter value for saveFile.');
                    }
                    break;
            }
        }
        return true;
    }

    /**
     * @return bool
     * @throws Exception
     */
    private function setEndpoints(): bool
    {
        /* check if region exists and set api/token endpoints */
        if (array_key_exists(strtolower($this->config['region']), $this->endpoints)) {
            $region_code = strtolower($this->config['region']);
            if ($this->config['sandbox']) {
                $this->endpoint = "https://{$this->endpoints[$region_code]['sandbox']}/";
            } else {
                $this->endpoint = "https://{$this->endpoints[$region_code]['prod']}/";
            }
            $this->tokenUrl = $this->endpoints[$region_code]['tokenUrl'];
        } else {
            $this->logAndThrow('Invalid region.');
        }
        return true;
    }

    /**
     * @param $message
     * @throws Exception
     */
    private function logAndThrow($message)
    {
        throw new Exception($message);
    }
}
