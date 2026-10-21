<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait DiscoveryRequests
 * Contains requests' wrappers of Amazon Ads API for targetable entity discovery.
 * Set Client::profileId for profile-scoped requests, or pass an account ID.
 * @see https://advertising.amazon.com/API/docs/en-us/targetable-entities
 */
trait DiscoveryRequests
{
    /**
     * @param string|null $accountId
     * @return array
     */
    private function discoveryHeaders(?string $accountId): array
    {
        $mediaType = 'application/vnd.Mindreader.TargetableEntitiesResource.v1+json';
        $headers = [
            "Accept: $mediaType",
            "Content-Type: $mediaType",
        ];

        if (!is_null($accountId)) {
            $headers[] = 'Amazon-Advertising-AccountId: ' . $accountId;
        }

        return $headers;
    }

    /**
     * Lists targetable entities matching the supplied filters.
     * @see https://advertising.amazon.com/API/docs/en-us/targetable-entities#operation/ListTargetableEntities
     * @param array $data Required adProduct; optional locale, filters, maxResults (1-250) and nextToken.
     * @param string|null $accountId Optional DSP Rodeo entity ID or DSP advertiser account ID.
     * @return array
     * @throws Exception
     */
    public function listTargetableEntities(array $data, ?string $accountId = null): array
    {
        return $this->operation(
            'targetableEntities/list',
            $data,
            'POST',
            true,
            $this->discoveryHeaders($accountId)
        );
    }

    /**
     * Lists direct descendant paths under the supplied targetable entity paths.
     * @see https://advertising.amazon.com/API/docs/en-us/targetable-entities#operation/ListTargetableEntityPaths
     * @param array $data Required adProduct; optional locale and pathsFilter (array of string arrays).
     * @param string|null $accountId Optional DSP Rodeo entity ID or DSP advertiser account ID.
     * @return array
     * @throws Exception
     */
    public function listTargetableEntityPaths(array $data, ?string $accountId = null): array
    {
        return $this->operation(
            'targetableEntities/paths/list',
            $data,
            'POST',
            true,
            $this->discoveryHeaders($accountId)
        );
    }
}
