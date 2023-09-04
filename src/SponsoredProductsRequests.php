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
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createCampaigns(array $data): array
    {
        return $this->operation('sp/campaigns', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateCampaigns(array $data): array
    {
        return $this->operation('sp/campaigns', $data, 'PUT');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function archiveCampaign(array $data): array
    {
        return $this->operation('sp/campaigns/delete', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listCampaigns(array $data): array
    {
        return $this->operation('sp/campaigns/list', $data, 'POST');
    }


    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createAdGroups(array $data): array
    {
        return $this->operation('sp/adGroups', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateAdGroups(array $data): array
    {
        return $this->operation('sp/adGroups', $data, 'PUT');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function archiveAdGroup(array $data): array
    {
        return $this->operation('sp/adGroups/delete', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listAdGroups(array $data): array
    {
        return $this->operation('sp/adGroups/list', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createProductAds(array $data): array
    {
        return $this->operation('sp/productAds', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateProductAds(array $data): array
    {
        return $this->operation('sp/productAds', $data, 'PUT');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function archiveProductAds(array $data): array
    {
        return $this->operation('sp/productAds/delete', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listProductAds(array $data): array
    {
        return $this->operation('sp/productAds/list', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listKeywords(array $data): array
    {
        return $this->operation('sp/keywords/list', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createKeywords(array $data): array
    {
        return $this->operation('sp/keywords', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateKeywords(array $data): array
    {
        return $this->operation('sp/keywords', $data, 'PUT');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function archiveKeywords(array $data): array
    {
        return $this->operation('sp/keywords/delete', $data, 'PUT');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function keywordRecommendations(array $data): array
    {
        return $this->operation('sp/targets/keywords/recommendations', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listTargetingClauses(array $data): array
    {
        return $this->operation('sp/targets/list', $data, 'POST');
    }


    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createTargetingClauses(array $data): array
    {
        return $this->operation('sp/targets', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateTargetingClauses(array $data): array
    {
        return $this->operation('sp/targets', $data, 'PUT');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function archiveTargetingClause(array $data): array
    {
        return $this->operation('sp/targets/delete', $data, 'POST');
    }

    /**
     * Get number of targetable asins based on refinements provided by the user.
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getTargetsProductsCount(array $data): array
    {
        return $this->operation('sp/targets/products/count', $data, 'POST');
    }

    /**
     * Returns all targetable categories.
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getTargetingCategories(array $data): array
    {
        return $this->operation('sp/targets/categories', $data);
    }

    /**
     * Returns brands related to keyword input for negative targeting.
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function searchNegativeTargetsBrands(array $data): array
    {
        return $this->operation('sp/negativeTargets/brands/search', $data, 'POST');
    }

    /**
     * Returns refinements according to category input.
     * @param $categoryId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getTargetsCategoryRefinements($categoryId, ?array $data): array
    {
        return $this->operation("sp/targets/category/$categoryId/refinements", $data);
    }

    /**
     * Returns a list of category recommendations for the input list of ASINs.
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listTargetsCategoriesRecommendations(array $data): array
    {
        return $this->operation('sp/targets/categories/recommendations', $data, 'POST');
    }

    /**
     * Returns brands recommended for negative targeting.
     * @return array
     * @throws Exception
     */
    public function getNegativeTargetsBrandsRecommendations(): array
    {
        return $this->operation('sp/negativeTargets/brands/recommendations');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createNegativeKeywords(array $data): array
    {
        return $this->operation('sp/negativeKeywords', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateNegativeKeywords(array $data): array
    {
        return $this->operation('sp/negativeKeywords', $data, 'PUT');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function archiveNegativeKeyword(array $data): array
    {
        return $this->operation('sp/negativeKeywords/list', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listNegativeKeywords(array $data): array
    {
        return $this->operation('sp/negativeKeywords/list', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createCampaignNegativeKeywords(array $data): array
    {
        return $this->operation('sp/campaignNegativeKeywords', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateCampaignNegativeKeywords(array $data): array
    {
        return $this->operation('sp/campaignNegativeKeywords', $data, 'PUT');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function deleteCampaignNegativeKeyword(array $data): array
    {
        return $this->operation('sp/campaignNegativeKeywords/delete', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listCampaignNegativeKeywords(array $data): array
    {
        return $this->operation('sp/campaignNegativeKeywords/list', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/negativeTargets/list', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/negativeTargets', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/negativeTargets', $data, 'PUT');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function archiveNegativeTargetingClause(array $data): array
    {
        return $this->operation('sp/negativeTargets/delete', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listCampaignNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/campaignNegativeTargets/list', $data, 'POST');
    }


    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createCampaignNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/campaignNegativeTargets', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateCampaignNegativeTargetingClauses(array $data): array
    {
        return $this->operation('sp/campaignNegativeTargets', $data, 'PUT');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function archiveCampaignNegativeTargetingClause(array $data): array
    {
        return $this->operation('sp/campaignNegativeTargets/delete', $data, 'POST');
    }

    /**
     * https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/ThemeBasedBidRecommendation/operation/GetThemeBasedBidRecommendationForAdGroup_v1
     * This API is currently available in US, UK, DE, CA, JP, IN, ES, and FR. The API supports keyword and auto targets only.
     * The API will return a 422 response when an unsupported marketplace or target is provided.
     * For product targets in all marketplaces, and keyword or auto targets in other marketplaces, call /v2/sp/targets/bidRecommendations.
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function themeBasedBidRecommendation(array $data): array
    {
        return $this->operation('sp/targets/bid/recommendations', $data, 'POST');
    }

    /**
     * Creates a campaign optimization rule.
     * https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaign-Optimization-Rules/operation/CreateOptimizationRule
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createsCampaignOptimizationRule(array $data): array
    {
        return $this->operation('sp/rules/campaignOptimization', $data, 'POST');
    }

    /**
     * Updates a campaign optimization rule.
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateCampaignOptimizationRule(array $data): array
    {
        return $this->operation('sp/rules/campaignOptimization', $data, 'PUT');
    }


    /**
     * Gets campaign optimization rule state. Recommended refresh frequency is once a day.
     * https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Campaign-Optimization-Rules/operation/GetRuleNotification
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getsCampaignOptimizationRuleState(array $data): array
    {
        return $this->operation('sp/rules/campaignOptimization/state', $data, 'POST');
    }

    /**
     * Gets a campaign optimization rule recommendation for SP campaigns.
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getCampaignOptimizationRuleRecommendation(array $data): array
    {
        return $this->operation('sp/rules/campaignOptimization/eligibility', $data, 'POST');
    }

    /**
     * Gets a campaign optimization rule specified by identifier.
     * @param $campaignOptimizationId
     * @return array
     * @throws Exception
     */
    public function getCampaignOptimizationRuleReVByIdentifier($campaignOptimizationId): array
    {
        return $this->operation("sp/rules/campaignOptimization/$campaignOptimizationId");
    }

    /**
     * Deletes a campaign optimization rule specified by identifier.
     * @param $campaignOptimizationId
     * @return array
     * @throws Exception
     */
    public function deleteCampaignOptimizationRuleReVByIdentifier($campaignOptimizationId): array
    {
        return $this->operation("sp/rules/campaignOptimization/$campaignOptimizationId", null, 'DELETE');
    }

    /**
     * Associates one or more budget rules to a campaign specified by identifier.
     * @param $campaignId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function associatesBudgetRulesByCampaignIdentifier($campaignId, ?array $data): array
    {
        return $this->operation("sp/campaigns/$campaignId/budgetRules", $data, 'POST');
    }

    /**
     * Gets a list of budget rules associated to a campaign specified by identifier.
     * @param $campaignId
     * @return array
     * @throws Exception
     */
    public function getBudgetRulesByCampaignIdentifier($campaignId): array
    {
        return $this->operation("sp/campaigns/$campaignId/budgetRules");
    }

    /**
     * Creates one or more budget rules.
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function createBudgetRules(?array $data): array
    {
        return $this->operation('sp/budgetRules', $data, 'POST');
    }

    /**
     * Get all budget rules created by an advertiser
     * @return array
     * @throws Exception
     */
    public function getAllBudgetRules(): array
    {
        return $this->operation('sp/budgetRules');
    }

    /**
     * Updates one or more budget rules.
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateBudgetRules(array $data): array
    {
        return $this->operation('sp/budgetRules', $data, 'PUT');
    }

    /**
     * Gets all the campaigns associated with a budget rule
     * @param $budgetRuleId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getAllCampaignsAssociatedByBudgetRuleId($budgetRuleId, ?array $data): array
    {
        return $this->operation("sp/budgetRules/$budgetRuleId/campaigns", $data);
    }

    /**
     * Disassociates a budget rule specified by identifier from a campaign specified by identifier.
     * @param $campaignId
     * @param $budgetRuleId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function deleteCampaignBudgetRuleByBudgetRuleId($campaignId, $budgetRuleId, ?array $data): array
    {
        return $this->operation("sp/campaigns/$campaignId/budgetRules/$budgetRuleId", $data, 'DELETE');
    }

    /**
     * Gets the budget history for a campaign specified by identifier
     * @param $campaignId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getBudgetHistoryByCampaignId($campaignId, ?array $data): array
    {
        return $this->operation("sp/campaigns/$campaignId/budgetRules/budgetHistory", $data);
    }

    /**
     * Gets a budget rule specified by identifier.
     * @param $budgetRuleId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getBudgetRuleByBudgetRuleId($budgetRuleId, ?array $data): array
    {
        return $this->operation("sp/budgetRules/$budgetRuleId", $data);
    }

    /**
     * getBudgetRecommendation
     * https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Budget-Recommendation-New-Campaigns/operation/getBudgetRecommendation
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
     * https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Budget-recommendations-and-missed-opportunities/operation/getBudgetRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getRecommendedDailyBudget(array $data): array
    {
        return $this->operation('sp/campaigns/budgetRecommendations', $data, 'POST');
    }

    /**
     * Gets a list of special events with suggested date range and suggested budget increase for a campaign specified by identifier.
     * https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/BudgetRulesRecommendation/operation/SPGetBudgetRulesRecommendation
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getCampaignsBudgetRulesRecommendations(array $data): array
    {
        return $this->operation('sp/campaigns/budgetRules/recommendations', $data, 'POST');
    }

    /**
     * getCampaignRecommendations
     * https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Consolidated-Recommendations/operation/getCampaignRecommendations
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
     * https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Product-Recommendation-Service/operation/getProductRecommendations
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getTargetsProductsRecommendations(array $data): array
    {
        return $this->operation('sp/targets/products/recommendations', $data, 'POST');
    }

    /**
     * Budget usage API for SP campaigns
     * https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#tag/Budget-Usage/operation/spCampaignsBudgetUsage
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getCampaignsBudgetUsage(array $data): array
    {
        return $this->operation('sp/campaigns/budget/usage', $data, 'POST');
    }

    /**
     * @param $recordType
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function requestSnapshot($recordType, array $data): array
    {
        return $this->operation("$recordType/snapshot", $data, 'POST');
    }

    /**
     * @param $snapshotId
     * @return array
     * @throws Exception
     */
    public function getSnapshot($snapshotId): array
    {
        $req = $this->operation("snapshots/$snapshotId");
        if ($req['success']) {
            $json = json_decode($req['response'], true);
            if ($json['status'] == 'SUCCESS') {
                return $this->download($json['location']);
            }
        }
        return $req;
    }

    /**
     * POST https://advertising-api.amazon.com/v2/sp/targets/productRecommendations
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#createTargetRecommendations
     *
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
     *
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getBrandRecommendations(array $data): array
    {
        return $this->operation('sp/targets/brands', $data);
    }


    /**
     * @param array|null $data
     * @return string
     * @throws Exception
     */
    private function getCampaignTypeForReportRequest(?array $data): string
    {
        $reportType = is_array($data) && isset($data['reportType'])
            ? $data['reportType']
            : Client::CAMPAIGN_TYPE_SPONSORED_PRODUCTS;
        if ($reportType === Client::CAMPAIGN_TYPE_SPONSORED_PRODUCTS) {
            return 'sp';
        } elseif ($reportType === Client::CAMPAIGN_TYPE_SPONSORED_BRANDS) {
            return 'hsa';
        } elseif ($reportType === Client::CAMPAIGN_TYPE_SPONSORED_DISPLAY) {
            return 'sd';
        } else {
            throw new Exception("Invalid reportType $reportType");
        }
    }
}
