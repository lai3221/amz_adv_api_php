<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait SponsoredBrandsRequests
 * Contains requests' wrappers of Amazon Ads API for Sponsored Brands
 */
trait SponsoredBrandsRequests
{
    /**
     * Gets an array of ad groups associated with the client identifier passed in
     * the authorization header, filtered by specified criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/listAdGroups
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandAdGroups($data = null): array
    {
        return $this->operation("sb/adGroups", $data);
    }

    /**
     * Gets an ad group specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/getAdGroups
     * @param int $adGroupId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandAdGroup(int $adGroupId): array
    {
        return $this->operation("sb/adGroups/{$adGroupId}");
    }

    /**
     * Gets an array of keywords, filtered by optional criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/listKeywords
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandKeywords($data = null): array
    {
        return $this->operation("sb/keywords", $data);
    }

    /**
     * Updates one or more keywords.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/updateKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandKeywords(array $data): array
    {
        return $this->operation("sb/keywords", $data, "PUT");
    }

    /**
     * Create one or more new keywords.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/createKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandKeywords(array $data): array
    {
        return $this->operation("sb/keywords", $data, "POST");
    }

    /**
     * Gets a keyword specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/getKeyword
     * @param int $keywordId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandKeyword(int $keywordId): array
    {
        return $this->operation("sb/keywords/{$keywordId}");
    }

    /**
     * Archives a keyword specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/archiveKeyword
     * @param int $keywordId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredBrandKeyword(int $keywordId): array
    {
        return $this->operation("sb/keywords/{$keywordId}", "DELETE");
    }

    /**
     * Gets an array of negative keywords, filtered by optional criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20keywords/listNegativeKeywords
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandNegativeKeywords($data = null): array
    {
        return $this->operation("sb/negativeKeywords", $data);
    }

    /**
     * Create one or more new negative keywords.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20keywords/createNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandNegativeKeywords(array $data): array
    {
        return $this->operation("sb/negativeKeywords", $data, "POST");
    }

    /**
     * Updates one or more new negative keywords.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20keywords/updateNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandNegativeKeywords(array $data): array
    {
        return $this->operation("sb/negativeKeywords", $data, "PUT");
    }

    /**
     * Gets a negative keyword specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20keywords/getNegativeKeyword
     * @param int $keywordId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandNegativeKeyword(int $keywordId): array
    {
        return $this->operation("sb/negativeKeywords/{$keywordId}");
    }

    /**
     * Archives a negative keyword specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20keywords/archiveNegativeKeyword
     * @param int $keywordId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredBrandNegativeKeyword(int $keywordId): array
    {
        return $this->operation("sb/negativeKeywords/{$keywordId}", "DELETE");
    }

    /**
     * Gets a list of product targets associated with the client identifier passed in the
     * authorization header, filtered by specified criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Product%20targeting/listTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandTargets(array $data): array
    {
        return $this->operation("sb/targets/list", $data, "POST");
    }

    /**
     * Updates one or more targets.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Product%20targeting/updateTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandTargets(array $data): array
    {
        return $this->operation("sb/targets", $data, "PUT");
    }

    /**
     * Create one or more new targets.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Product%20targeting/createTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandTargets(array $data): array
    {
        return $this->operation("sb/targets", $data, "POST");
    }

    /**
     * Gets a target specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Product%20targeting/getTarget
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandTarget(int $targetId): array
    {
        return $this->operation("sb/targets/{$targetId}");
    }

    /**
     * Archives a target specified by identifier. Note that archiving is permanent, and once a target
     * has been archived it can't be made active again.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Product%20targeting/archiveTarget
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredBrandTarget(int $targetId): array
    {
        return $this->operation("sb/targets/{$targetId}", "DELETE");
    }

    /**
     * Gets one or more product targets specified by identifiers.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Product%20targeting/createTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function batchGetSponsoredBrandTargets(array $data): array
    {
        return $this->operation("sb/targets/batchGet", $data, "POST");
    }

    /**
     * Gets a list of product negative targets associated with the client identifier passed in
     * the authorization header, filtered by specified criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20product%20targeting/listNegativeTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandNegativeTargets(array $data): array
    {
        return $this->operation("sb/negativeTargets/list", $data, "POST");
    }

    /**
     * Updates one or more negative targets.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20product%20targeting/updateNegativeTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandNegativeTargets(array $data): array
    {
        return $this->operation("sb/negativeTargets", $data, "PUT");
    }

    /**
     * Create one or more new negative targets.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20product%20targeting/createNegativeTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandNegativeTargets(array $data): array
    {
        return $this->operation("sb/negativeTargets", $data, "POST");
    }

    /**
     * Gets a negative target specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20product%20targeting/getNegativeTarget
     * @param int $negativeTargetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandNegativeTarget(int $negativeTargetId): array
    {
        return $this->operation("sb/negativeTargets/{$negativeTargetId}");
    }

    /**
     * Archives a negative target specified by identifier. Note that archiving is permanent, and once
     * a negative target has been archived it can't be made active again.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20product%20targeting/archiveNegativeTarget
     * @param int $negativeTargetId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredBrandNegativeTarget(int $negativeTargetId): array
    {
        return $this->operation("sb/negativeTargets/{$negativeTargetId}", "DELETE");
    }

    /**
     * Gets one or more product negative targets specified by identifiers.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20product%20targeting/batchGetNegativeTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function batchGetSponsoredBrandNegativeTargets(array $data): array
    {
        return $this->operation("sb/negativeTargets/batchGet", $data, "POST");
    }

    /**
     * Gets a list of recommended products for targeting.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Targeting%20recommendations/getProductRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandTargetsProductRecommendations(array $data): array
    {
        return $this->operation("sb/recommendations/targets/product/list", $data, "POST");
    }

    /**
     * Gets a list of recommended categories for targeting.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Targeting%20recommendations/getTargetingCategories
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandTargetsCategoryRecommendations(array $data): array
    {
        return $this->operation("sb/recommendations/targets/category", $data, "POST");
    }

    /**
     * Gets a list of brand suggestions.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Targeting%20recommendations/getBrandRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandTargetsBrandRecommendations(array $data): array
    {
        return $this->operation("sb/recommendations/targets/brand", $data, "POST");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Bid%20recommendations/getBidsRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandBidRecommendations(array $data)
    {
        return $this->operation("sb/recommendations/bids", $data, 'POST');
    }

    /**
     * Gets an array of draft campaign objects.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/listDraftCampaigns
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandDraftCampaigns(): array
    {
        return $this->operation("sb/drafts/campaigns");
    }

    /**
     * Creates one or more new draft campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/createDraftCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandDraftCampaigns(array $data): array
    {
        return $this->operation("sb/drafts/campaigns", $data, "POST");
    }

    /**
     * Updates one or more draft campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/updateDraftCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandDraftCampaigns(array $data): array
    {
        return $this->operation("sb/drafts/campaigns", $data, "PUT");
    }

    /**
     * Gets a draft campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/getDraftCampaign
     * @param int $draftCampaignId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandDraftCampaigns(int $draftCampaignId): array
    {
        return $this->operation("sb/drafts/campaigns/{$draftCampaignId}");
    }

    /**
     * Archives a draft campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/deleteDraftCampaign
     * @param int $draftCampaignId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredBrandDraftCampaigns(int $draftCampaignId): array
    {
        return $this->operation("sb/drafts/campaigns/{$draftCampaignId}", "DELETE");
    }

    /**
     * Submits one or more existing draft campaigns to the moderation approval queue.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/submitDraftCampaign
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function submitSponsoredBrandDraftCampaigns(array $data): array
    {
        return $this->operation("sb/drafts/campaigns/submit", $data,"POST");
    }

    /**
     * Gets the moderation result for a campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Moderation/get_sb_moderation_campaigns__campaignId_
     * @param int $campaignId
     * @return array
     * @throws Exception
     */
    public function moderationSponsoredBrandCampaign(int $campaignId): array
    {
        return $this->operation("sb/moderation/campaigns/{$campaignId}");
    }

    /**
     * GET /brands
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Brands/getBrands
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getBrands($data = null): array
    {
        return $this->operation("brands", $data);
    }

    /**
     * GET /stores/assets
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Stores/listAssets
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getStoreAssets($data = null): array
    {
        return $this->operation("/stores/assets", $data);
    }

    /**
     * GET /pageAsins
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Landing%20page%20asins/listAsins
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getPageAsins(array $data): array
    {
        if (!isset($data['pageUrl'])) {
            throw new Exception("pageUrl should be set as GET param");
        }
        return $this->operation("pageAsins", $data);
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/listCampaigns
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandCampaigns($data = null): array
    {
        return $this->operation("sb/campaigns", $data);
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/createCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandCampaigns(array $data): array
    {
        return $this->operation("sb/campaigns", $data, 'POST');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/updateCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandCampaigns(array $data): array
    {
        return $this->operation("sb/campaigns", $data, 'PUT');
    }


    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/getCampaign
     * @param int $campaignId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandCampaign(int $campaignId): array
    {
        return $this->operation("sb/campaigns/{$campaignId}");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/archiveCampaign
     * @param int $campaignId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredBrandCampaign(int $campaignId): array
    {
        return $this->operation("sb/campaigns/{$campaignId}", null, 'DELETE');
    }
}