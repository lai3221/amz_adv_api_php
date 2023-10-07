<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait AssetsRequests
 * Amazon Ads API - Assets
 */
trait AssetsRequests
{
    /**
     * Retrieves an asset along with the metadata
     * @see https://advertising.amazon.com/API/docs/en-us/creative-asset-library#tag/Creative-Assets/operation/getAsset
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getAsset(array $data): array
    {
        return $this->operation('assets', $data);
    }

    /**
     * Registers an uploaded asset with creative assets with optional contextual and tagging information.
     * @see https://advertising.amazon.com/API/docs/en-us/creative-asset-library#tag/Creative-Assets/operation/registerAsset
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function registerAsset(array $data): array
    {
        return $this->operation('assets/register', $data, 'POST');
    }

    /**
     * Creates an upload location to upload an asset.
     * @see https://advertising.amazon.com/API/docs/en-us/creative-asset-library#tag/Creative-Assets/operation/getUploadLocation
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getUploadLocation(array $data): array
    {
        return $this->operation('assets/upload', $data, 'POST');
    }

    /**
     * Search assets
     * @see https://advertising.amazon.com/API/docs/en-us/creative-asset-library#tag/Creative-Assets/operation/searchAssets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function searchAssets(array $data): array
    {
        return $this->operation('assets/search', $data, 'POST');
    }
}
