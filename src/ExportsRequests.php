<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Amazon Ads API to request and download exports across ad products.
 * Create and manage Amazon Posts.
 * Trait Amazon Ads API Exports
 * Amazon Ads API - Exports
 */
trait ExportsRequests
{
    /**
     * Creates a file-based export of Campaigns in the account satisfying the filtering criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/exports#tag/Exports/operation/CampaignExport
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function campaignExport(array $data): array
    {
        return $this->operation('campaigns/export', $data, 'POST');
    }

    /**
     * Creates a file-based export of Ad Groups in the account satisfying the filtering criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/exports#tag/Exports/operation/AdGroupExport
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function adGroupExport(array $data): array
    {
        return $this->operation('adGroups/export', $data, 'POST');
    }

    /**
     * Creates a file-based export of Targets.
     * @see https://advertising.amazon.com/API/docs/en-us/exports#tag/Exports/operation/TargetExport
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function targetExport(array $data): array
    {
        return $this->operation('targets/export', $data, 'POST');
    }

    /**
     * Gets the status of a requested export and a link to download the export.
     * This API will return a status of the specified export.
     * @see https://advertising.amazon.com/API/docs/en-us/exports#tag/Exports/operation/GetExport
     * @param string $exportId
     * @return array
     */
    public function getExport(string $exportId): array
    {
        return $this->operation("exports/$exportId");
    }
}
