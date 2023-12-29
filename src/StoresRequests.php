<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait StoresRequests
 * Amazon Ads API - Stores
 */
trait StoresRequests
{
    /**
     * Retrieves a list of stores for a given advertiser.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/2/stores
     * @return array
     * @throws Exception
     */
    public function getStores(): array
    {
        return $this->operation('v2/stores');
    }

    /**
     * GetStoresByBrandEntityId [DEPRECATED]
     * @param string $brandEntityId
     * @return array
     * @throws Exception
     */
    public function getStoresByBrandEntityId(string $brandEntityId): array
    {
        return $this->operation("v2/stores/$brandEntityId");
    }
}
