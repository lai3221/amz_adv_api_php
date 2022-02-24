<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait SponsoredDisplayRequests
 * Contains requests' wrappers of Amazon Ads API for Sponsored Display
 * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi
 */
trait SponsoredDisplayRequests
{
    /**
     * Gets a list of campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/listCampaigns
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayCampaigns($data = null): array
    {
        return $this->operation("sd/campaigns", $data);
    }

    /**
     * Updates one or more campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/updateCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredDisplayCampaigns(array $data): array
    {
        return $this->operation("sd/campaigns", $data, "PUT");
    }

    /**
     * Create one or more new campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/createCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredDisplayCampaigns(array $data): array
    {
        return $this->operation("sd/campaigns", $data, "POST");
    }

    /**
     * Gets a requested campaign.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/getCampaign
     * @param int $campaignId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayCampaigns(int $campaignId): array
    {
        return $this->operation("sd/campaigns/{$campaignId}");
    }

    /**
     * Sets the campaign status to archived.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/archiveCampaign
     * @param int $campaignId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredDisplayCampaigns(int $campaignId): array
    {
        return $this->operation("sd/campaigns/{$campaignId}", "DELETE");
    }

    /**
     * Gets a list of campaigns with extended fields.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/listCampaignsEx
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayCampaignsEx($data = null): array
    {
        return $this->operation("sd/campaigns/extended", $data);
    }

    /**
     * Gets extended information for a requested campaign.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/getCampaignResponseEx
     * @param int $campaignId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayCampaignsEx(int $campaignId): array
    {
        return $this->operation("sd/campaigns/extended/{$campaignId}");
    }

    /**
     * Gets a list of ad groups.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/listAdGroups
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayAdGroups($data = null): array
    {
        return $this->operation("sd/adGroups", $data);
    }

    /**
     * Updates on or more ad groups.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/updateAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredDisplayAdGroups(array $data): array
    {
        return $this->operation("sd/adGroups", $data, "PUT");
    }

    /**
     * Creates one or more ad groups.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/createAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredDisplayAdGroups(array $data): array
    {
        return $this->operation("sd/adGroups", $data, "POST");
    }

    /**
     * Gets a requested ad group.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/getAdGroup
     * @param int $adGroupId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayAdGroup(int $adGroupId): array
    {
        return $this->operation("sd/adGroups/{$adGroupId}");
    }

    /**
     * Sets the ad group status to archived.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/archiveAdGroup
     * @param int $adGroupId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredDisplayAdGroupId(int $adGroupId): array
    {
        return $this->operation("sd/adGroups/{$adGroupId}", "DELETE");
    }

    /**
     * Gets a list of ad groups with extended fields.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/listAdGroupsEx
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayAdGroupsEx($data = null): array
    {
        return $this->operation("sd/adGroups/extended", $data);
    }

    /**
     * Gets extended information for a requested ad group.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/getAdGroupResponseEx
     * @param int $adGroupId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayAdGroupsEx(int $adGroupId): array
    {
        return $this->operation("sd/adGroups/extended/{$adGroupId}");
    }

    /**
     * Gets a list of product ads.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/listProductAds
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayProductAds($data = null): array
    {
        return $this->operation("sd/productAds", $data);
    }

    /**
     * Updates one or more product ads.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/updateProductAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredDisplayProductAds(array $data): array
    {
        return $this->operation("sd/productAds", $data, "PUT");
    }

    /**
     * Creates one or more product ads.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/createProductAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredDisplayProductAds(array $data): array
    {
        return $this->operation("sd/productAds", $data, "POST");
    }

    /**
     * Gets a requested product ad.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/getProductAd
     * @param int $adId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayProductAds(int $adId): array
    {
        return $this->operation("sd/productAds/{$adId}");
    }

    /**
     * Sets the status of a product ad to archived.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/archiveProductAd
     * @param int $adId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredDisplayProductAds(int $adId): array
    {
        return $this->operation("sd/productAds/{$adId}", "DELETE");
    }

    /**
     * Gets a list of product ads with extended fields.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/listProductAdsEx
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayProductAdsEx($data = null): array
    {
        return $this->operation("sd/productAds/extended", $data);
    }

    /**
     * Gets extended information for a product ad.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/getProductAdResponseEx
     * @param int $adId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayProductAdsEx(int $adId): array
    {
        return $this->operation("sd/productAds/extended/{$adId}");
    }

    /**
     * Gets a list of targeting clauses.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/listTargetingClauses
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayTargets($data = null): array
    {
        return $this->operation("sd/targets", $data);
    }

    /**
     * Updates one or more targeting clauses.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/updateTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredDisplayTargets(array $data): array
    {
        return $this->operation("sd/targets", $data, "PUT");
    }

    /**
     * Creates one or more targeting clauses.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/createTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredDisplayTargets(array $data): array
    {
        return $this->operation("sd/targets", $data, "POST");
    }

    /**
     * Gets a targeting clause specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/getTargets
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayTargets(int $targetId): array
    {
        return $this->operation("sd/targets/{$targetId}");
    }

    /**
     * Sets the `state` of a targeting clause to `archived`.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/archiveTargetingClause
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredDisplayTargets(int $targetId): array
    {
        return $this->operation("sd/targets/{$targetId}", "DELETE");
    }

    /**
     * Gets a list of targeting clause objects with extended fields.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/listTargetingClausesEx
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayTargetsEx($data = null): array
    {
        return $this->operation("sd/targets/extended", $data);
    }

    /**
     * Gets extended information for a targeting clause.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/getTargetsEx
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayTargetsEx(int $targetId): array
    {
        return $this->operation("sd/targets/extended/{$targetId}");
    }

    /**
     * Gets a list of negative targeting clauses.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/listNegativeTargetingClauses
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayNegativeTargets($data = null): array
    {
        return $this->operation("sd/negativeTargets", $data);
    }

    /**
     * Updates one or more negative targeting clauses.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/updateNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredDisplayNegativeTargets(array $data): array
    {
        return $this->operation("sd/negativeTargets", $data, "PUT");
    }

    /**
     * Creates one or more negative targeting clauses.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/createNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredDisplayNegativeTargets(array $data): array
    {
        return $this->operation("sd/negativeTargets", $data, "POST");
    }

    /**
     * Gets a negative targeting clause specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/getNegativeTargets
     * @param int $negativeTargetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayNegativeTargets(int $negativeTargetId): array
    {
        return $this->operation("sd/negativeTargets/{$negativeTargetId}");
    }

    /**
     * Sets the `state` of a negative targeting clause to `archived`.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/archiveNegativeTargetingClause
     * @param int $negativeTargetId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredDisplayNegativeTargets(int $negativeTargetId): array
    {
        return $this->operation("sd/negativeTargets/{$negativeTargetId}", "DELETE");
    }

    /**
     * Gets a list of negative targeting clause objects with extended fields.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/listNegativeTargetingClausesEx
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayNegativeTargetsEx($data = null): array
    {
        return $this->operation("sd/negativeTargets/extended", $data);
    }

    /**
     * Gets extended information for a negative targeting clause.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/getNegativeTargetsEx
     * @param int $negativeTargetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayNegativeTargetsEx(int $negativeTargetId): array
    {
        return $this->operation("sd/negativeTargets/extended/{$negativeTargetId}");
    }

    /**
     * Gets a list of all products eligible for advertising using the specified tactic type.
     * Each product in the list includes an associated readiness status.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Suggested%20products/listSuggestedProducts
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplaySuggestedProducts($data = null): array
    {
        return $this->operation("sd/suggestedProducts", $data);
    }

    /**
     * Gets the readiness status for a specified list of up to 100 products.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Suggested%20products/getProductReadinessStatus
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayProductReadinessStatus($data = null): array
    {
        return $this->operation("/sd/suggestedProducts/productReadinessStatus", $data, "POST");
    }
}