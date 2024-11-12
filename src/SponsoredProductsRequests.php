<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait SponsoredProductsRequests
 * Contains requests' wrappers of Amazon Ads API for Sponsored Products
 */
trait SponsoredProductsRequests
{
    /**
     * CreateSponsoredProductsCampaigns
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaigns/operation/CreateSponsoredProductsCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredProductsCampaigns(array $data): array
    {
        return $this->operation('sp/campaigns', $data, 'POST');
    }

    /**
     * UpdateSponsoredProductsCampaigns
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaigns/operation/UpdateSponsoredProductsCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredProductsCampaigns(array $data): array
    {
        return $this->operation('sp/campaigns', $data, 'PUT');
    }

    /**
     * DeleteSponsoredProductsCampaigns
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaigns/operation/DeleteSponsoredProductsCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredProductsCampaigns(array $data): array
    {
        return $this->operation('sp/campaigns/delete', $data, 'POST');
    }

    /**
     * ListSponsoredProductsCampaigns
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaigns/operation/ListSponsoredProductsCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredProductsCampaigns(array $data): array
    {
        return $this->operation('sp/campaigns/list', $data, 'POST');
    }


    /**
     * CreateSponsoredProductsAdGroups
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/AdGroups/operation/CreateSponsoredProductsAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredProductsAdGroups(array $data): array
    {
        return $this->operation('sp/adGroups', $data, 'POST');
    }

    /**
     * UpdateSponsoredProductsAdGroups
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/AdGroups/operation/UpdateSponsoredProductsAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredProductsAdGroups(array $data): array
    {
        return $this->operation('sp/adGroups', $data, 'PUT');
    }

    /**
     * DeleteSponsoredProductsAdGroups
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/AdGroups/operation/DeleteSponsoredProductsAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredProductsAdGroups(array $data): array
    {
        return $this->operation('sp/adGroups/delete', $data, 'POST');
    }

    /**
     * ListSponsoredProductsAdGroups
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/AdGroups/operation/ListSponsoredProductsAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredProductsAdGroups(array $data): array
    {
        return $this->operation('sp/adGroups/list', $data, 'POST');
    }

    /**
     * CreateSponsoredProductsProductAds
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/ProductAds/operation/CreateSponsoredProductsProductAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredProductsProductAds(array $data): array
    {
        return $this->operation('sp/productAds', $data, 'POST');
    }

    /**
     * UpdateSponsoredProductsProductAds
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/ProductAds/operation/UpdateSponsoredProductsProductAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredProductsProductAds(array $data): array
    {
        return $this->operation('sp/productAds', $data, 'PUT');
    }

    /**
     * DeleteSponsoredProductsProductAds
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/ProductAds/operation/DeleteSponsoredProductsProductAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredProductsProductAds(array $data): array
    {
        return $this->operation('sp/productAds/delete', $data, 'POST');
    }

    /**
     * ListSponsoredProductsProductAds
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/ProductAds/operation/ListSponsoredProductsProductAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredProductsProductAds(array $data): array
    {
        return $this->operation('sp/productAds/list', $data, 'POST');
    }

    /**
     * ListSponsoredProductsKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Keywords/operation/ListSponsoredProductsKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredProductsKeywords(array $data): array
    {
        return $this->operation('sp/keywords/list', $data, 'POST');
    }

    /**
     * CreateSponsoredProductsKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Keywords/operation/CreateSponsoredProductsKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredProductsKeywords(array $data): array
    {
        return $this->operation('sp/keywords', $data, 'POST');
    }

    /**
     * UpdateSponsoredProductsKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Keywords/operation/UpdateSponsoredProductsKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredProductsKeywords(array $data): array
    {
        return $this->operation('sp/keywords', $data, 'PUT');
    }

    /**
     * DeleteSponsoredProductsKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Keywords/operation/DeleteSponsoredProductsKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredProductsKeywords(array $data): array
    {
        return $this->operation('sp/keywords/delete', $data, 'PUT');
    }

    /**
     * Get keyword recommendations
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Keyword-Recommendations/operation/getRankedKeywordRecommendation
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getRankedKeywordRecommendation(array $data): array
    {
        return $this->operation('sp/targets/keywords/recommendations', $data, 'POST');
    }

    /**
     * ListSponsoredProductsTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/TargetingClauses/operation/ListSponsoredProductsTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredProductsTargetingClauses(array $data): array
    {
        return $this->operation('sp/targets/list', $data, 'POST');
    }


    /**
     * CreateSponsoredProductsTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/TargetingClauses/operation/CreateSponsoredProductsTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredProductsTargetingClauses(array $data): array
    {
        return $this->operation('sp/targets', $data, 'POST');
    }

    /**
     * UpdateSponsoredProductsTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/TargetingClauses/operation/UpdateSponsoredProductsTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredProductsTargetingClauses(array $data): array
    {
        return $this->operation('sp/targets', $data, 'PUT');
    }

    /**
     * DeleteSponsoredProductsTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/TargetingClauses/operation/DeleteSponsoredProductsTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredProductsTargetingClauses(array $data): array
    {
        return $this->operation('sp/targets/delete', $data, 'POST');
    }

    /**
     * Get number of targetable asins based on refinements provided by the user.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Product-Targeting/operation/getTargetableASINCounts
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getTargetableASINCounts(array $data): array
    {
        return $this->operation('sp/targets/products/count', $data, 'POST');
    }

    /**
     * Returns all targetable categories.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Product-Targeting/operation/getTargetableCategories
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getTargetableCategories(array $data): array
    {
        return $this->operation('sp/targets/categories', $data);
    }

    /**
     * Returns brands related to keyword input for negative targeting.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Product-Targeting/operation/searchBrands
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function searchBrands(array $data): array
    {
        return $this->operation('sp/negativeTargets/brands/search', $data, 'POST');
    }

    /**
     * Returns refinements according to category input.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Product-Targeting/operation/getRefinementsForCategory
     * @param $categoryId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getRefinementsForCategory($categoryId, ?array $data): array
    {
        return $this->operation("sp/targets/category/$categoryId/refinements", $data);
    }

    /**
     * Returns a list of category recommendations for the input list of ASINs.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Product-Targeting/operation/getCategoryRecommendationsForASINs
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getCategoryRecommendationsForASINs(array $data): array
    {
        return $this->operation('sp/targets/categories/recommendations', $data, 'POST');
    }

    /**
     * Returns brands recommended for negative targeting.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Product-Targeting/operation/getNegativeBrands
     * @return array
     * @throws Exception
     */
    public function getNegativeBrands(): array
    {
        return $this->operation('sp/negativeTargets/brands/recommendations');
    }

    /**
     * CreateSponsoredProductsNegativeKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/NegativeKeywords/operation/CreateSponsoredProductsNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredProductsNegativeKeywords(array $data): array
    {
        return $this->operation('sp/negativeKeywords', $data, 'POST');
    }

    /**
     * UpdateSponsoredProductsNegativeKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/NegativeKeywords/operation/UpdateSponsoredProductsNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredProductsNegativeKeywords(array $data): array
    {
        return $this->operation('sp/negativeKeywords', $data, 'PUT');
    }

    /**
     * DeleteSponsoredProductsNegativeKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/NegativeKeywords/operation/DeleteSponsoredProductsNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredProductsNegativeKeywords(array $data): array
    {
        return $this->operation('sp/negativeKeywords/delete', $data, 'POST');
    }

    /**
     * ListSponsoredProductsNegativeKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/NegativeKeywords/operation/ListSponsoredProductsNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredProductsNegativeKeywords(array $data): array
    {
        return $this->operation('sp/negativeKeywords/list', $data, 'POST');
    }

    /**
     * CreateSponsoredProductsCampaignNegativeKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/CampaignNegativeKeywords/operation/CreateSponsoredProductsCampaignNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredProductsCampaignNegativeKeywords(array $data): array
    {
        return $this->operation('sp/campaignNegativeKeywords', $data, 'POST');
    }

    /**
     * UpdateSponsoredProductsCampaignNegativeKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/CampaignNegativeKeywords/operation/UpdateSponsoredProductsCampaignNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredProductsCampaignNegativeKeywords(array $data): array
    {
        return $this->operation('sp/campaignNegativeKeywords', $data, 'PUT');
    }

    /**
     * DeleteSponsoredProductsCampaignNegativeKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/CampaignNegativeKeywords/operation/DeleteSponsoredProductsCampaignNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredProductsCampaignNegativeKeywords(array $data): array
    {
        return $this->operation('sp/campaignNegativeKeywords/delete', $data, 'POST');
    }

    /**
     * ListSponsoredProductsCampaignNegativeKeywords
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/CampaignNegativeKeywords/operation/ListSponsoredProductsCampaignNegativeKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredProductsCampaignNegativeKeywords(array $data): array
    {
        return $this->operation('sp/campaignNegativeKeywords/list', $data, 'POST');
    }

    /**
     * ListSponsoredProductsNegativeTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/NegativeTargetingClauses/operation/ListSponsoredProductsNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredProductsNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/negativeTargets/list', $data, 'POST');
    }

    /**
     * CreateSponsoredProductsNegativeTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/NegativeTargetingClauses/operation/CreateSponsoredProductsNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredProductsNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/negativeTargets', $data, 'POST');
    }

    /**
     * UpdateSponsoredProductsNegativeTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/NegativeTargetingClauses/operation/UpdateSponsoredProductsNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredProductsNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/negativeTargets', $data, 'PUT');
    }

    /**
     * DeleteSponsoredProductsNegativeTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/NegativeTargetingClauses/operation/DeleteSponsoredProductsNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredProductsNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/negativeTargets/delete', $data, 'POST');
    }

    /**
     * ListSponsoredProductsCampaignNegativeTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/CampaignNegativeTargetingClauses/operation/ListSponsoredProductsCampaignNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredProductsCampaignNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/campaignNegativeTargets/list', $data, 'POST');
    }


    /**
     * CreateSponsoredProductsCampaignNegativeTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/CampaignNegativeTargetingClauses/operation/CreateSponsoredProductsCampaignNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredProductsCampaignNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/campaignNegativeTargets', $data, 'POST');
    }

    /**
     * UpdateSponsoredProductsCampaignNegativeTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/CampaignNegativeTargetingClauses/operation/UpdateSponsoredProductsCampaignNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredProductsCampaignNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/campaignNegativeTargets', $data, 'PUT');
    }

    /**
     * DeleteSponsoredProductsCampaignNegativeTargetingClauses
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/CampaignNegativeTargetingClauses/operation/DeleteSponsoredProductsCampaignNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteSponsoredProductsCampaignNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/campaignNegativeTargets/delete', $data, 'POST');
    }

    /**
     * Gets theme-based bid recommendations for new or existing ad groups.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/ThemeBasedBidRecommendation/operation/GetThemeBasedBidRecommendationForAdGroup_v1
     * This API is currently available in US, UK, DE, CA, JP, IN, ES, and FR.
     * The API supports keyword and auto targets only.
     * The API will return a 422 response when an unsupported marketplace or target is provided.
     * For product targets in all marketplaces, and keyword or auto targets in other marketplaces,
     * call /v2/sp/targets/bidRecommendations.
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getThemeBasedBidRecommendationForAdGroupV1(array $data): array
    {
        return $this->operation('sp/targets/bid/recommendations', $data, 'POST');
    }

    /**
     * Creates a campaign optimization rule.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaign-Optimization-Rules/operation/CreateOptimizationRule
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createOptimizationRule(array $data): array
    {
        return $this->operation('sp/rules/campaignOptimization', $data, 'POST');
    }

    /**
     * Updates a campaign optimization rule.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaign-Optimization-Rules/operation/UpdateOptimizationRule
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateOptimizationRule(array $data): array
    {
        return $this->operation('sp/rules/campaignOptimization', $data, 'PUT');
    }


    /**
     * Gets campaign optimization rule state. Recommended refresh frequency is once a day.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaign-Optimization-Rules/operation/GetRuleNotification
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getRuleNotification(array $data): array
    {
        return $this->operation('sp/rules/campaignOptimization/state', $data, 'POST');
    }

    /**
     * Gets a campaign optimization rule recommendation for SP campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaign-Optimization-Rules/operation/GetOptimizationRuleEligibility
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getOptimizationRuleEligibility(array $data): array
    {
        return $this->operation('sp/rules/campaignOptimization/eligibility', $data, 'POST');
    }

    /**
     * Gets a campaign optimization rule specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaign-Optimization-Rules/operation/GetCampaignOptimizationRule
     * @param $campaignOptimizationId
     * @return array
     * @throws Exception
     */
    public function getCampaignOptimizationRule($campaignOptimizationId): array
    {
        return $this->operation("sp/rules/campaignOptimization/$campaignOptimizationId");
    }

    /**
     * Deletes a campaign optimization rule specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaign-Optimization-Rules/operation/DeleteCampaignOptimizationRule
     * @param $campaignOptimizationId
     * @return array
     * @throws Exception
     */
    public function deleteCampaignOptimizationRule($campaignOptimizationId): array
    {
        return $this->operation("sp/rules/campaignOptimization/$campaignOptimizationId", null, 'DELETE');
    }

    /**
     * Associates one or more budget rules to a campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/BudgetRules/operation/CreateAssociatedBudgetRulesForSPCampaigns
     * @param $campaignId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function createAssociatedBudgetRulesForSPCampaigns($campaignId, ?array $data): array
    {
        return $this->operation("sp/campaigns/$campaignId/budgetRules", $data, 'POST');
    }

    /**
     * Gets a list of budget rules associated to a campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/BudgetRules/operation/ListAssociatedBudgetRulesForSPCampaigns
     * @param $campaignId
     * @return array
     * @throws Exception
     */
    public function listAssociatedBudgetRulesForSPCampaigns($campaignId): array
    {
        return $this->operation("sp/campaigns/$campaignId/budgetRules");
    }

    /**
     * Creates one or more budget rules.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/BudgetRules/operation/CreateBudgetRulesForSPCampaigns
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function createBudgetRulesForSPCampaigns(?array $data): array
    {
        return $this->operation('sp/budgetRules', $data, 'POST');
    }

    /**
     * Get all budget rules created by an advertiser
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/BudgetRules/operation/GetSPBudgetRulesForAdvertiser
     * @return array
     * @throws Exception
     */
    public function getSPBudgetRulesForAdvertiser(): array
    {
        return $this->operation('sp/budgetRules');
    }

    /**
     * Updates one or more budget rules.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/BudgetRules/operation/UpdateBudgetRulesForSPCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateBudgetRulesForSPCampaigns(array $data): array
    {
        return $this->operation('sp/budgetRules', $data, 'PUT');
    }

    /**
     * Gets all the campaigns associated with a budget rule
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/BudgetRules/operation/GetCampaignsAssociatedWithSPBudgetRule
     * @param $budgetRuleId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getCampaignsAssociatedWithSPBudgetRule($budgetRuleId, ?array $data): array
    {
        return $this->operation("sp/budgetRules/$budgetRuleId/campaigns", $data);
    }

    /**
     * Disassociates a budget rule specified by identifier from a campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/BudgetRules/operation/DisassociateAssociatedBudgetRuleForSPCampaigns
     * @param $campaignId
     * @param $budgetRuleId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function disassociateAssociatedBudgetRuleForSPCampaigns($campaignId, $budgetRuleId, ?array $data): array
    {
        return $this->operation("sp/campaigns/$campaignId/budgetRules/$budgetRuleId", $data, 'DELETE');
    }

    /**
     * Gets the budget history for a campaign specified by identifier
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/BudgetRules/operation/getRuleBasedBudgetHistoryForSPCampaigns
     * @param $campaignId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getRuleBasedBudgetHistoryForSPCampaigns($campaignId, ?array $data): array
    {
        return $this->operation("sp/campaigns/$campaignId/budgetRules/budgetHistory", $data);
    }

    /**
     * Gets a budget rule specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/BudgetRules/operation/GetBudgetRuleByRuleIdForSPCampaigns
     * @param $budgetRuleId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getBudgetRuleByRuleIdForSPCampaigns($budgetRuleId, ?array $data): array
    {
        return $this->operation("sp/budgetRules/$budgetRuleId", $data);
    }

    /**
     * Creates daily budget recommendation along with benchmark metrics when creating a new campaign.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Budget-Recommendation-New-Campaigns/operation/getBudgetRecommendation
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getBudgetRecommendation(array $data): array
    {
        return $this->operation('sp/campaigns/initialBudgetRecommendation', $data, 'POST');
    }

    /**
     * Get recommended daily budget and estimated missed opportunities for campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Budget-recommendations-and-missed-opportunities/operation/getBudgetRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getBudgetRecommendations(array $data): array
    {
        return $this->operation('sp/campaigns/budgetRecommendations', $data, 'POST');
    }

    /**
     * Gets a list of special events with suggested date range and
     * suggested budget increase for a campaign specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/BudgetRulesRecommendation/operation/SPGetBudgetRulesRecommendation
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function sPGetBudgetRulesRecommendation(array $data): array
    {
        return $this->operation('sp/campaigns/budgetRules/recommendations', $data, 'POST');
    }

    /**
     * GetCampaignRecommendations
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Consolidated-Recommendations/operation/getCampaignRecommendations
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getCampaignRecommendations(?array $data): array
    {
        return $this->operation('sp/campaign/recommendations', $data);
    }

    /**
     * Suggested target ASINs for your advertised product
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Product-Recommendation-Service/operation/getProductRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getProductRecommendations(array $data): array
    {
        return $this->operation('sp/targets/products/recommendations', $data, 'POST');
    }

    /**
     * Budget usage API for SP campaigns
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Budget-Usage/operation/spCampaignsBudgetUsage
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function spCampaignsBudgetUsage(array $data): array
    {
        return $this->operation('sp/campaigns/budget/usage', $data, 'POST');
    }

    /**
     * POST https://advertising-api.amazon.com/v2/sp/targets/productRecommendations
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#createTargetRecommendations
     * @param array $data [pageSize => int(1-50), pageNumber => int, asins: string[]]
     * @return array
     * @throws Exception
     */
    public function generateTargetsProductRecommendations(array $data): array
    {
        return $this->operation('sp/targets/productRecommendations', $data, 'POST');
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/targets/brands
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#getBrandRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getBrandRecommendations(array $data): array
    {
        return $this->operation('sp/targets/brands', $data);
    }

    /**
     * POST getKeywordGroupRecommendations
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Keyword-Group-Targeting-Recommendations/operation/getKeywordGroupRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getKeywordGroupRecommendations(array $data): array
    {
        return $this->operation('sp/targeting/recommendations/keywordGroups', $data, 'POST');
    }

    ## Version 2 following,Version 3 above. ##

    /**
     * Gets a list of bid recommendations for keyword, product, or auto targeting expressions.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/2-0/openapi#tag/Bid-recommendations/operation/getBidRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getBidRecommendationsV2(array $data): array
    {
        return $this->operation('v2/sp/targets/bidRecommendations', $data, 'POST');
    }

    /**
     * Gets suggested keywords for the specified ad group.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/2-0/openapi#tag/Suggested-keywords/operation/getAdGroupSuggestedKeywords
     * @param $adGroupId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getAdGroupSuggestedKeywordsV2($adGroupId, ?array $data): array
    {
        return $this->operation("v2/sp/adGroups/$adGroupId/suggested/keywords", $data);
    }

    /**
     * Gets suggested keywords with extended data for the specified ad group.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/2-0/openapi#tag/Suggested-keywords/operation/getAdGroupSuggestedKeywordsEx
     * @param $adGroupId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getAdGroupSuggestedKeywordsExV2($adGroupId, ?array $data): array
    {
        return $this->operation("v2/sp/adGroups/$adGroupId/suggested/keywords/extended", $data);
    }

    /**
     * Gets suggested keywords for the specified ASIN.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/2-0/openapi#tag/Suggested-keywords/operation/getAsinSuggestedKeywords
     * @param $asinValue
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getAsinSuggestedKeywordsV2($asinValue, ?array $data): array
    {
        return $this->operation("v2/sp/asins/$asinValue/suggested/keywords", $data);
    }

    /**
     * Gets suggested keyword for a specified list of ASINs.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/2-0/openapi#tag/Suggested-keywords/operation/bulkGetAsinSuggestedKeywords
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function bulkGetAsinSuggestedKeywordsV2(array $data): array
    {
        return $this->operation('v2/sp/asins/suggested/keywords', $data, 'POST');
    }

    /**
     * Request a file-based snapshot of all entities of the specified type.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/2-0/openapi#tag/Snapshots/operation/requestSnapshot
     * @param $recordType
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function requestSnapshotV2($recordType, ?array $data): array
    {
        return $this->operation("v2/sp/$recordType/snapshot", $data, 'POST');
    }

    /**
     * Gets the status of a requested snapshot.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/2-0/openapi#tag/Snapshots/operation/getSnapshotStatus
     * @param $snapshotId
     * @return array
     * @throws Exception
     */
    public function getSnapshotStatusV2($snapshotId): array
    {
        return $this->operation("v2/sp/snapshots/$snapshotId");
    }

    /**
     * Downloads a previously requested snapshot.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-products/2-0/openapi#tag/Snapshots/operation/downloadSnapshot
     * @param $snapshotId
     * @return array
     * @throws Exception
     */
    public function downloadSnapshotV2($snapshotId): array
    {
        return $this->operation("v2/sp/snapshots/$snapshotId/download");
    }
}
