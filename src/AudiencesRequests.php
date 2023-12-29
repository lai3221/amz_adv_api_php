<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait Audiences discovery
 * Amazon Ads API - Audiences
 */
trait AudiencesRequests
{
    /**
     * Updates an existing targeting audience based on an audience definition and audience ID.
     * @see https://advertising.amazon.com/API/docs/en-us/audiences#tag/Ads/operation/DspAudienceEdit
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function dspAudienceEdit(array $data): array
    {
        return $this->operation('dsp/audiences/edit', $data, 'PUT');
    }

    /**
     * Returns a list of audience segments for an advertiser. The result set can be filtered by providing an array of Filter objects. Each item in the resulting set will match all specified filters.
     * @see https://advertising.amazon.com/API/docs/en-us/audiences#tag/Discovery/operation/listAudiences
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listAudiences(array $data): array
    {
        return $this->operation('audiences/list', $data, 'POST');
    }

    /**
     * Returns a list of audience categories for a given category path
     * @see https://advertising.amazon.com/API/docs/en-us/audiences#tag/Discovery/operation/fetchTaxonomy
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function fetchTaxonomy(array $data): array
    {
        return $this->operation('audiences/taxonomy/list', $data, 'POST');
    }
}
