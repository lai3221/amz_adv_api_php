<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait PortfoliosRequests
 * Amazon Ads API - Portfolios
 */
trait AccountRequests
{
    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listPortfolios(array $data): array
    {
        return $this->operation('v2/portfolios', $data);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listPortfoliosEx(array $data): array
    {
        return $this->operation('v2/portfolios/extended', $data);
    }

    /**
     * @param int $portfolioId
     * @return array
     * @throws Exception
     */
    public function getPortfolio(int $portfolioId): array
    {
        return $this->operation('v2/portfolios/' . $portfolioId);
    }

    /**
     * @param int $portfolioId
     * @return array
     * @throws Exception
     */
    public function getPortfolioEx(int $portfolioId): array
    {
        return $this->operation('v2/portfolios/extended/' . $portfolioId);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createPortfolios(array $data): array
    {
        return $this->operation('v2/portfolios', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updatePortfolios(array $data): array
    {
        return $this->operation('v2/portfolios', $data, 'PUT');
    }

    /**
     * @return array
     * @throws Exception
     */
    public function listProfiles(): array
    {
        return $this->operation('v2/profiles');
    }

    /**
     * @param $profileId
     * @return array
     * @throws Exception
     */
    public function getProfile($profileId): array
    {
        return $this->operation("v2/profiles/$profileId");
    }

    /**
     * @param $data
     * @return array
     * @throws Exception
     */
    public function updateProfiles($data): array
    {
        return $this->operation('v2/profiles', $data, 'PUT');
    }


    /**
     * GET /v2/stores
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getStores(array $data): array
    {
        return $this->operation('v2/stores', $data);
    }

    /**
     * GET /v2/stores/{$brandEntityId}
     * @param string $brandEntityId
     * @return array
     * @throws Exception
     */
    public function getStoresByBrandEntityId(string $brandEntityId): array
    {
        return $this->operation("v2/stores/$brandEntityId");
    }
}
