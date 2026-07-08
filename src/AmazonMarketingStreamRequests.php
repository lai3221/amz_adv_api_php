<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait AmazonMarketingStreamRequests
 * Contains requests' wrappers of Amazon Ads API for Amazon Marketing Stream
 * @see https://advertising.amazon.com/API/docs/en-us/amazon-marketing-stream/openapi
 */
trait AmazonMarketingStreamRequests
{
    /**
     * @param string $accountId
     * @param string $accountHeaderName
     * @return array
     */
    private function amazonMarketingStreamHeaders(string $accountId, string $accountHeaderName): array
    {
        $mediaType = 'application/vnd.amazonmarketingstreamsubscriptions.v1+json';

        return [
            "Accept: $mediaType",
            "Content-Type: $mediaType",
            "$accountHeaderName: $accountId",
        ];
    }

    /**
     * List stream subscriptions.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-marketing-stream/openapi#tag/Stream%20Subscription/operation/ListStreamSubscriptions
     * @param string $accountId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listStreamSubscriptions(string $accountId, ?array $data = null): array
    {
        return $this->operation(
            'streams/subscriptions',
            $data,
            'GET',
            true,
            $this->amazonMarketingStreamHeaders($accountId, 'Amazon-Ads-AccountId')
        );
    }

    /**
     * Create a new stream subscription.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-marketing-stream/openapi#tag/Stream%20Subscription/operation/CreateStreamSubscription
     * @param string $accountId
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createStreamSubscription(string $accountId, array $data): array
    {
        return $this->operation(
            'streams/subscriptions',
            $data,
            'POST',
            true,
            $this->amazonMarketingStreamHeaders($accountId, 'Amazon-Ads-AccountId')
        );
    }

    /**
     * Fetch a specific stream subscription by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-marketing-stream/openapi#tag/Stream%20Subscription/operation/GetStreamSubscription
     * @param string $accountId
     * @param $subscriptionId
     * @return array
     * @throws Exception
     */
    public function getStreamSubscription(string $accountId, $subscriptionId): array
    {
        return $this->operation(
            "streams/subscriptions/$subscriptionId",
            null,
            'GET',
            true,
            $this->amazonMarketingStreamHeaders($accountId, 'Amazon-Ads-AccountId')
        );
    }

    /**
     * Update an existing stream subscription.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-marketing-stream/openapi#tag/Stream%20Subscription/operation/UpdateStreamSubscription
     * @param string $accountId
     * @param $subscriptionId
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateStreamSubscription(string $accountId, $subscriptionId, array $data): array
    {
        return $this->operation(
            "streams/subscriptions/$subscriptionId",
            $data,
            'PUT',
            true,
            $this->amazonMarketingStreamHeaders($accountId, 'Amazon-Ads-AccountId')
        );
    }

    /**
     * List DSP stream subscriptions.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-marketing-stream/openapi#tag/DSP%20Stream%20Subscription/operation/ListDspStreamSubscriptions
     * @param string $accountId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listDspStreamSubscriptions(string $accountId, ?array $data = null): array
    {
        return $this->operation(
            'dsp/streams/subscriptions',
            $data,
            'GET',
            true,
            $this->amazonMarketingStreamHeaders($accountId, 'Amazon-Ads-Account-ID')
        );
    }

    /**
     * Create a new DSP stream subscription.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-marketing-stream/openapi#tag/DSP%20Stream%20Subscription/operation/CreateDspStreamSubscription
     * @param string $accountId
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createDspStreamSubscription(string $accountId, array $data): array
    {
        return $this->operation(
            'dsp/streams/subscriptions',
            $data,
            'POST',
            true,
            $this->amazonMarketingStreamHeaders($accountId, 'Amazon-Ads-Account-ID')
        );
    }

    /**
     * Fetch a specific DSP stream subscription by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-marketing-stream/openapi#tag/DSP%20Stream%20Subscription/operation/GetDspStreamSubscription
     * @param string $accountId
     * @param $subscriptionId
     * @return array
     * @throws Exception
     */
    public function getDspStreamSubscription(string $accountId, $subscriptionId): array
    {
        return $this->operation(
            "dsp/streams/subscriptions/$subscriptionId",
            null,
            'GET',
            true,
            $this->amazonMarketingStreamHeaders($accountId, 'Amazon-Ads-Account-ID')
        );
    }

    /**
     * Update an existing DSP stream subscription.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-marketing-stream/openapi#tag/DSP%20Stream%20Subscription/operation/UpdateDspStreamSubscription
     * @param string $accountId
     * @param $subscriptionId
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateDspStreamSubscription(string $accountId, $subscriptionId, array $data): array
    {
        return $this->operation(
            "dsp/streams/subscriptions/$subscriptionId",
            $data,
            'PUT',
            true,
            $this->amazonMarketingStreamHeaders($accountId, 'Amazon-Ads-Account-ID')
        );
    }
}
