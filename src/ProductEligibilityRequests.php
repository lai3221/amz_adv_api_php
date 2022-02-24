<?php

namespace AmazonAdvertisingApi;

/**
 * Trait ProductEligibilityRequests
 * @see https://advertising.amazon.com/API/docs/en-us/eligibility-prod-3p#/
 */
trait ProductEligibilityRequests
{

    /**
     * Gets a list of advertising eligibility objects for a set of products.
     * Requests are permitted only for products sold by the merchant associated with the profile.
     * Note that the request object is a list of ASINs,
     * but multiple SKUs are returned if there is more than one SKU associated with an ASIN.
     * If a product is not eligible for advertising,
     * the response includes an object describing the reasons for ineligibility.
     *
     * @see https://advertising.amazon.com/API/docs/en-us/eligibility-prod-3p/#/Product%20Eligibility/productEligibility
     * @param array $data
     * @return array
     */
    public function getProductListEligibility(array $data): array
    {
        return $this->operation('eligibility/product/list', $data, 'POST');
    }
}
