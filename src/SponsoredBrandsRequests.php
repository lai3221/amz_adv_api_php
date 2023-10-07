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
     * Creates Sponsored Brands campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Campaigns/operation/CreateSponsoredBrandsCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandsCampaigns(array $data): array
    {
        return $this->operation('sb/v4/campaigns', $data, 'POST');
    }

    /**
     * Updates Sponsored Brands campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Campaigns/operation/UpdateSponsoredBrandsCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandsCampaigns(array $data): array
    {
        return $this->operation('sb/v4/campaigns', $data, 'PUT');
    }

    /**
     * Lists Sponsored Brands campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Campaigns/operation/ListSponsoredBrandsCampaigns
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandsCampaigns($data = null): array
    {
        return $this->operation('sb/v4/campaigns/list', $data, 'POST');
    }

    /**
     * Deletes Sponsored Brands campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Campaigns/operation/DeleteSponsoredBrandsCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredBrandsCampaigns(array $data): array
    {
        return $this->operation('sb/v4/campaigns/delete', $data, 'POST');
    }

    /**
     * Creates Sponsored Brands ad groups.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/AdGroups/operation/CreateSponsoredBrandsAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandsAdGroups(array $data): array
    {
        return $this->operation('sb/v4/adGroups', $data, 'POST');
    }

    /**
     * Updates Sponsored Brands ad groups.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/AdGroups/operation/UpdateSponsoredBrandsAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandsAdGroups(array $data): array
    {
        return $this->operation('sb/v4/adGroups', $data, 'PUT');
    }

    /**
     * Lists Sponsored Brands ad groups.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/AdGroups/operation/ListSponsoredBrandsAdGroups
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandsAdGroups($data = null): array
    {
        return $this->operation('sb/v4/adGroups/list', $data, 'POST');
    }

    /**
     * Deletes Sponsored Brands ad groups.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/AdGroups/operation/DeleteSponsoredBrandsAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredBrandsAdGroups(array $data): array
    {
        return $this->operation('sb/v4/adGroups/delete', $data, 'POST');
    }

    /**
     * Deletes Sponsored Brands ads.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Ads/operation/DeleteSponsoredBrandsAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredBrandsAds(array $data): array
    {
        return $this->operation('sb/v4/ads/delete', $data, 'POST');
    }

    /**
     * Updates Sponsored Brands ads.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Ads/operation/UpdateSponsoredBrandsAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandsAds(array $data): array
    {
        return $this->operation('sb/v4/ads', $data, 'PUT');
    }

    /**
     * Lists Sponsored Brands ads.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#/Ads/ListSponsoredBrandsAds
     * @param  array  $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandsAds(array $data): array
    {
        return $this->operation('sb/v4/ads/list', $data, 'POST');
    }

    /**
     * Creates Sponsored Brands product collection ads.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Ads/operation/CreateSponsoredBrandsProductCollectionAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandsProductCollectionAds(array $data): array
    {
        return $this->operation('sb/v4/ads/productCollection', $data, 'POST');
    }

    /**
     * Creates Sponsored Brands video ads.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Ads/operation/CreateSponsoredBrandsVideoAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandsVideoAds(array $data): array
    {
        return $this->operation('sb/v4/ads/video', $data, 'POST');
    }

    /**
     * Creates Sponsored Brands brand video ads.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Ads/operation/CreateSponsoredBrandsBrandVideoAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandsBrandVideoAds(array $data): array
    {
        return $this->operation('sb/v4/ads/brandVideo', $data, 'POST');
    }

    /**
     * Creates Sponsored Brands store spotlight ads.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Ads/operation/CreateSponsoredBrandStoreSpotlightAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandStoreSpotlightAds(array $data): array
    {
        return $this->operation('sb/v4/ads/storeSpotlight', $data, 'POST');
    }

    /**
     * CreateVideoCreative
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Ad-Creatives/operation/CreateVideoCreative
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createVideoCreative(array $data): array
    {
        return $this->operation('sb/ads/creatives/video', $data, 'POST');
    }

    /**
     * CreateStoreSpotlightCreative
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Ad-Creatives/operation/CreateStoreSpotlightCreative
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createStoreSpotlightCreative(array $data): array
    {
        return $this->operation('sb/ads/creatives/storeSpotlight', $data, 'POST');
    }

    /**
     * CreateProductCollectionCreative
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Ad-Creatives/operation/CreateProductCollectionCreative
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createProductCollectionCreative(array $data): array
    {
        return $this->operation('sb/ads/creatives/productCollection', $data, 'POST');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Ad-Creatives/operation/CreateBrandVideoCreative
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createBrandVideoCreative(array $data): array
    {
        return $this->operation('sb/ads/creatives/brandVideo', $data, 'POST');
    }

    /**
     * ListCreatives
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Ad-Creatives/operation/ListCreatives
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listCreatives(array $data): array
    {
        return $this->operation('sb/ads/creatives/list', $data, 'POST');
    }

    /**
     * Gets daily budget recommendations.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Budget-Recommendations/operation/GetBudgetRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getSBBudgetRecommendations(array $data): array
    {
        return $this->operation('sb/campaigns/budgetRecommendations', $data, 'POST');
    }

    /**
     * Returns all targetable categories by default in a list. List of categories can be used to build and traverse category tree.
     * Set query parameter includeOnlyRootCategories=true to return only the root categories,
     * or set parentCategoryRefinementId to return children of a specific parent category.
     * Each category node has the fields - category name, category refinement id,
     * parent category refinement id, isTargetable flag, and ASIN count range.
     * Only available in the following marketplaces: US, CA, MX, UK, DE, FR, ES, IT, IN, JP
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Product-targeting-categories/operation/SBTargetingGetTargetableCategories
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function sBTargetingGetTargetableCategories(array $data): array
    {
        return $this->operation('sb/targets/categories', $data);
    }

    /**
     * Returns refinements according to category input.
     * Only available in the following marketplaces: US, CA, MX, UK, DE, FR, ES, IT, IN, JP
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Product-targeting-categories/operation/SBTargetingGetRefinementsForCategory
     * @param $categoryRefinementId
     * @return array
     * @throws Exception
     */
    public function sBTargetingGetRefinementsForCategory($categoryRefinementId): array
    {
        return $this->operation("sb/targets/categories/$categoryRefinementId/refinements");
    }

    /**
     * Get number of targetable asins based on refinements provided by the user.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Product-targeting-categories/operation/SBTargetingGetTargetableASINCounts
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function sBTargetingGetTargetableASINCounts(array $data): array
    {
        return $this->operation('sb/targets/products/count', $data, 'POST');
    }


    /**
     * Creates one or more budget rules.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/BudgetRules/operation/CreateBudgetRulesForSBCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createBudgetRulesForSBCampaigns(array $data): array
    {
        return $this->operation('sb/budgetRules', $data, 'POST');
    }

    /**
     * Get all budget rules created by an advertiser
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/BudgetRules/operation/GetSBBudgetRulesForAdvertiser
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getSBBudgetRulesForAdvertiser(array $data): array
    {
        return $this->operation('sb/budgetRules', $data);
    }

    /**
     * Update one or more budget rules.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/BudgetRules/operation/UpdateBudgetRulesForSBCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateBudgetRulesForSBCampaigns(array $data): array
    {
        return $this->operation('sb/budgetRules', $data, 'PUT');
    }

    /**
     * Disassociates a budget rule specified by identifier from a campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/BudgetRules/operation/DisassociateAssociatedBudgetRuleForSBCampaigns
     * @param $campaignId
     * @param $budgetRuleId
     * @return array
     * @throws Exception
     */
    public function disassociateAssociatedBudgetRuleForSBCampaigns($campaignId, $budgetRuleId): array
    {
        return $this->operation("sb/campaigns/$campaignId/budgetRules/$budgetRuleId", null, 'DELETE');
    }

    /**
     * Gets a budget rule specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/BudgetRules/operation/GetBudgetRuleByRuleIdForSBCampaigns
     * @param $budgetRuleId
     * @return array
     * @throws Exception
     */
    public function getBudgetRuleByRuleIdForSBCampaigns($budgetRuleId): array
    {
        return $this->operation("sb/budgetRules/$budgetRuleId");
    }

    /**
     * Gets all the campaigns associated with a budget rule
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/BudgetRules/operation/GetCampaignsAssociatedWithSBBudgetRule
     * @param $budgetRuleId
     * @return array
     * @throws Exception
     */
    public function getCampaignsAssociatedWithSBBudgetRule($budgetRuleId): array
    {
        return $this->operation("sb/budgetRules/$budgetRuleId/campaigns");
    }

    /**
     * Gets the budget history for a campaign specified by identifier.
     * This endpoint will be deprecated on August 31, 2023.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/BudgetRules/operation/getRuleBasedBudgetHistoryForSBCampaigns
     * @param $campaignId
     * @return array
     * @throws Exception
     */
    public function getRuleBasedBudgetHistoryForSBCampaigns($campaignId): array
    {
        return $this->operation("sb/campaigns/$campaignId/budgetRules/budgetHistory");
    }

    /**
     * Associates one or more budget rules to a campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/BudgetRules/operation/CreateAssociatedBudgetRulesForSBCampaigns
     * @param $campaignId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function createAssociatedBudgetRulesForSBCampaigns($campaignId, ?array $data): array
    {
        return $this->operation("sb/campaigns/$campaignId/budgetRules", $data, 'POST');
    }

    /**
     * Gets a list of budget rules associated to a campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/BudgetRules/operation/ListAssociatedBudgetRulesForSBCampaigns
     * @param $campaignId
     * @return array
     * @throws Exception
     */
    public function listAssociatedBudgetRulesForSBCampaigns($campaignId): array
    {
        return $this->operation("sb/campaigns/$campaignId/budgetRules");
    }

    /**
     * Gets a list of special events with suggested date range and suggested budget increase for a campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/BudgetRulesRecommendation/operation/SBGetBudgetRulesRecommendation
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function sBGetBudgetRulesRecommendation(array $data): array
    {
        return $this->operation('sb/campaigns/budgetRules/recommendations', $data, 'POST');
    }

    /**
     * Budget usage API for SB campaigns
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Budget-Usage/operation/sbCampaignsBudgetUsage
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function sbCampaignsBudgetUsage(array $data): array
    {
        return $this->operation('sb/campaigns/budget/usage', $data, 'POST');
    }


    /**
     * Gets an array of keywords, filtered by optional criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Keywords/operation/listKeywords
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandKeywords($data = null): array
    {
        return $this->operation('sb/keywords', $data);
    }

    /**
     * Updates one or more keywords.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Keywords/operation/updateKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandKeywords(array $data): array
    {
        return $this->operation('sb/keywords', $data, 'PUT');
    }

    /**
     * Create one or more new keywords.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Keywords/operation/createKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandKeywords(array $data): array
    {
        return $this->operation('sb/keywords', $data, 'POST');
    }

    /**
     * Gets a keyword specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Keywords/operation/getKeyword
     * @param int $keywordId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandKeyword(int $keywordId): array
    {
        return $this->operation("sb/keywords/$keywordId");
    }

    /**
     * Archives a keyword specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Keywords/operation/archiveKeyword
     * @param int $keywordId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredBrandKeyword(int $keywordId): array
    {
        return $this->operation("sb/keywords/$keywordId", null, 'DELETE');
    }


    /**
     * Gets an array of negative keywords, filtered by optional criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Negative-keywords/operation/listNegativeKeywords
     * @param null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandNegativeKeywords($data = null): array
    {
        return $this->operation('sb/negativeKeywords', $data);
    }

    /**
     * Create one or more new negative keywords.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Negative-keywords/operation/createNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandNegativeKeywords(array $data): array
    {
        return $this->operation('sb/negativeKeywords', $data, 'POST');
    }

    /**
     * Updates one or more new negative keywords.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Negative-keywords/operation/updateNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandNegativeKeywords(array $data): array
    {
        return $this->operation('sb/negativeKeywords', $data, 'PUT');
    }

    /**
     * Gets a negative keyword specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Negative-keywords/operation/getNegativeKeyword
     * @param int $keywordId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandNegativeKeyword(int $keywordId): array
    {
        return $this->operation("sb/negativeKeywords/$keywordId");
    }

    /**
     * Archives a negative keyword specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Negative-keywords/operation/archiveNegativeKeyword
     * @param int $keywordId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredBrandNegativeKeyword(int $keywordId): array
    {
        return $this->operation("sb/negativeKeywords/$keywordId", null, 'DELETE');
    }

    /**
     * Gets a list of product targets associated with the client identifier passed in the
     * authorization header, filtered by specified criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Product-targeting/operation/listTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandTargets(array $data): array
    {
        return $this->operation('sb/targets/list', $data, 'POST', false);
    }

    /**
     * Updates one or more targets.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Product-targeting/operation/updateTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandTargets(array $data): array
    {
        return $this->operation('sb/targets', $data, 'PUT');
    }

    /**
     * Create one or more new targets.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Product-targeting/operation/createTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandTargets(array $data): array
    {
        return $this->operation('sb/targets', $data, 'POST');
    }

    /**
     * Gets a target specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Product-targeting/operation/getTarget
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandTarget(int $targetId): array
    {
        return $this->operation("sb/targets/$targetId");
    }

    /**
     * Archives a target specified by identifier. Note that archiving is permanent, and once a target
     * has been archived it can't be made active again.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Product-targeting/operation/archiveTarget
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredBrandTarget(int $targetId): array
    {
        return $this->operation("sb/targets/$targetId", null, 'DELETE');
    }

    /**
     * Gets a list of product negative targets associated with the client identifier passed in
     * the authorization header, filtered by specified criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Negative-product-targeting/operation/listNegativeTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandNegativeTargets(array $data): array
    {
        return $this->operation('sb/negativeTargets/list', $data, 'POST', false);
    }

    /**
     * Updates one or more negative targets.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Negative-product-targeting/operation/updateNegativeTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandNegativeTargets(array $data): array
    {
        return $this->operation('sb/negativeTargets', $data, 'PUT');
    }

    /**
     * Create one or more new negative targets.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Negative-product-targeting/operation/createNegativeTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandNegativeTargets(array $data): array
    {
        return $this->operation('sb/negativeTargets', $data, 'POST');
    }

    /**
     * Gets a negative target specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Negative-product-targeting/operation/getNegativeTarget
     * @param int $negativeTargetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandNegativeTarget(int $negativeTargetId): array
    {
        return $this->operation("sb/negativeTargets/$negativeTargetId");
    }

    /**
     * Archives a negative target specified by identifier. Note that archiving is permanent, and once
     * a negative target has been archived it can't be made active again.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Negative-product-targeting/operation/archiveNegativeTarget
     * @param int $negativeTargetId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredBrandNegativeTarget(int $negativeTargetId): array
    {
        return $this->operation("sb/negativeTargets/$negativeTargetId",  null, 'DELETE');
    }

    /**
     * This endpoint is only available in the US marketplace. Gets a list of theme targets associated with the client identifier passed in the authorization header, filtered by specified criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Theme-targeting/operation/sbListThemes
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandThemeTargets(array $data): array
    {
        return $this->operation('sb/themes/list', $data, 'POST', false);
    }

    /**
     * Updates one or more theme targets.
     * This endpoint is only available in the US marketplace.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Theme-targeting/operation/sbUpdateThemes
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredBrandThemeTargets(array $data): array
    {
        return $this->operation('sb/themes', $data, 'PUT');
    }

    /**
     * Create one or more theme targets.
     * This endpoint is only available in the US marketplace.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Theme-targeting/operation/sbCreateThemes
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredBrandThemeTargets(array $data): array
    {
        return $this->operation('sb/themes', $data, 'POST');
    }

    /**
     * Gets a list of recommended products for targeting.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Targeting-recommendations/operation/getProductRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandTargetsProductRecommendations(array $data): array
    {
        return $this->operation('sb/recommendations/targets/product/list', $data, 'POST');
    }

    /**
     * Gets a list of recommended categories for targeting.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Targeting-recommendations/operation/getTargetingCategories
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandTargetsCategoryRecommendations(array $data): array
    {
        return $this->operation('sb/recommendations/targets/category', $data, 'POST');
    }

    /**
     * Gets a list of brand suggestions.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Targeting-recommendations/operation/getBrandRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredBrandTargetsBrandRecommendations(array $data): array
    {
        return $this->operation('sb/recommendations/targets/brand', $data, 'POST');
    }

    /**
     * Get a list of bid recommendation objects for a specified list of keywords or products.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Bid-recommendations/operation/getBidsRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandBidRecommendations(array $data): array
    {
        return $this->operation('sb/recommendations/bids', $data, 'POST');
    }

    /**
     * Gets an array of keyword recommendation objects for a set of ASINs included either on a landing page or a Stores page. Vendors may also specify a custom landing page.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Keyword-Recommendations/operation/getProductRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandsKeywordBidRecommendations(array $data): array
    {
        return $this->operation('sb/recommendations/keyword', $data, 'POST');
    }

    /**
     * Returns brands recommended for negative targeting. Only available for Sellers and Vendors.
     * These recommendations include your own brands because targeting your own brands usually results in lower performance than targeting competitors' brands.Only available in the following marketplaces: US, CA, MX, UK, DE, FR, ES, IT, IN, JP
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Targeting-recommendations/operation/SBTargetingGetNegativeBrands
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function sBTargetingGetNegativeBrands(?array $data): array
    {
        return $this->operation('sb/negativeTargets/brands/recommendations', $data);
    }

    /**
     * API to receive creative headline suggestions.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Suggestions/operation/getHeadlineRecommendations
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getHeadlineRecommendations(?array $data): array
    {
        return $this->operation('sb/recommendations/creative/headline', $data, 'POST');
    }

    /**
     * Creates campaign level insights. Insights will be provided for passed in campaign parameters.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi/prod#tag/Insights/operation/SBInsightsCampaignInsights
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function sBInsightsCampaignInsights(array $data): array
    {
        return $this->operation('sb/campaigns/insights', $data, 'POST');
    }

    /**
     * Gets the moderation result for a campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Moderation/paths/~1sb~1moderation~1campaigns~1%7BcampaignId%7D/get
     * @param int $campaignId
     * @return array
     * @throws Exception
     */
    public function getSponsoredBrandCampaignModeration(int $campaignId): array
    {
        return $this->operation("sb/moderation/campaigns/$campaignId");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/premoderation/openapi#tag/Pre-Moderation/operation/preModeration
     * @param $data
     * @return array
     * @throws Exception
     */
    public function sponsoredBrandPreModerateComponents($data): array
    {
        return $this->operation('preModeration', $data, 'POST');
    }

    /**
     * Provides time series data for the specified brand and category filtered by optional parameters.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/category-benchmark#tag/Category-Benchmark/operation/getTimeSeries
     * @param $brandName
     * @param $categoryId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getCategoryBenchmarkByBrandNameAndCategoryId($brandName, $categoryId, ?array $data): array
    {
        return $this->operation("benchmarks/brands/$brandName/categories/$categoryId", $data, 'POST');
    }

    /**
     * Provides overview of metrics for all brands and categories that the entity has access to.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/category-benchmark#tag/Category-Benchmark/operation/getReportData
     * @param $brandName
     * @param $categoryId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getCategoryBenchmark($brandName, $categoryId, ?array $data): array
    {
        return $this->operation("benchmarks/brands/$brandName/categories/$categoryId", $data, 'POST');
    }

    /**
     * Gets a list of brands that the advertising account has promoted in their SB campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/category-benchmark#tag/Category-Benchmark/operation/getBrands
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listBenchmarkBrands(?array $data): array
    {
        return $this->operation('benchmarks/brands', $data);
    }

    /**
     * Image assets are stored in the Store Assets Library. Note that there may be a delay before the image is displayed in the console.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Stores/operation/createAsset
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function createImageAsset(?array $data): array
    {
        return $this->operation('stores/assets', $data, 'POST');
    }

    /**
     * Gets ASIN information for a specified address.
     * Note that for sellers, the address must be a Store page. Vendors may also specify a custom landing page address.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Landing-page-asins/operation/listAsins
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getPageAsins(array $data): array
    {
        if (!isset($data['pageUrl'])) {
            throw new Exception('pageUrl should be set as GET param');
        }
        return $this->operation('pageAsins', $data);
    }

    /**
     * The API is used to notify that the upload is completed.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Media/operation/completeUpload
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function notifyMediaUploadComplete(?array $data): array
    {
        return $this->operation('media/complete', $data, 'POST');
    }

    /**
     * API to poll for media status. In order to attach media to campaign, media should be in either PendingDeepValidation or Available status.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Media/operation/describeMedia
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function pollMediaStatus(array $data): array
    {
        if (!isset($data['mediaId'])) {
            throw new Exception('mediaId should be set as GET param');
        }
        return $this->operation('media/describe', $data);
    }

    /**
     * Gets an array of Brand data objects for the Brand associated with the profile ID passed in the header.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Brands/operation/getBrands
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getBrands(?array  $data): array
    {
        return $this->operation('brands', $data);
    }
}
