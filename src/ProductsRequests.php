<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Checks the eligibility of products for a given campaign type.
 * Trait Products
 * Amazon Ads API - Products
 */
trait ProductsRequests
{
    use ProductEligibilityRequests;

    /**
     * Returns product metadata for the advertiser
     * @see https://advertising.amazon.com/API/docs/en-us/product-metadata#tag/Product-Selector/operation/ProductMetadata
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function productMetadata(array $data): array
    {
        return $this->operation('product/metadata', $data, 'POST');
    }
}
