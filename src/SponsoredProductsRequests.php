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
     * @param $campaignId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function getCampaign($campaignId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }
        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }

        return $this->operation($type . "campaigns/{$campaignId}");
    }

    /**
     * @param $campaignId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getCampaignEx($campaignId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }
        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaigns/extended/{$campaignId}");
    }

    /**
     * @param $data
     * @return array
     * @throws Exception
     */
    public function createCampaigns(array $data)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }
        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaigns", $data, "POST");
    }

    /**
     * @param $data
     * @return array
     * @throws Exception
     */
    public function updateCampaigns(array $data)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }
        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaigns", $data, "PUT");
    }

    /**
     * @param $campaignId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function archiveCampaign($campaignId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }
        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaigns/{$campaignId}", null, "DELETE");
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listCampaigns(?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }
        if (isset($data['campaignType']) && $type === 'hsa/') {
            unset($data['campaignType']);
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaigns", $data);
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listCampaignsEx(?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaigns/extended", $data);
    }

    /**
     * @param $adGroupId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function getAdGroup($adGroupId, ?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "adGroups/{$adGroupId}");
    }

    /**
     * @param $adGroupId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function getAdGroupEx($adGroupId, ?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "adGroups/extended/{$adGroupId}");
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createAdGroups(array $data)
    {
        $type = $this->getCampaignTypeFromData($data);

        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "adGroups", $data, "POST");
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateAdGroups(array $data)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
                $data = array_values($data);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "adGroups", $data, "PUT");
    }

    /**
     * @param $adGroupId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function archiveAdGroup($adGroupId, ?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "adGroups/{$adGroupId}", null, "DELETE");
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listAdGroups(?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "adGroups", $data);
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listAdGroupsEx(?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "adGroups/extended", $data);
    }

    /**
     * @param $keywordId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function getBiddableKeyword($keywordId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "keywords/{$keywordId}");
    }

    /**
     * @param $keywordId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function getBiddableKeywordEx($keywordId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "keywords/extended/{$keywordId}");
    }

    /**
     * @param $data
     * @return array
     * @throws Exception
     */
    public function createBiddableKeywords($data)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
                $data = array_values($data);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "keywords", $data, "POST");
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateBiddableKeywords(array $data)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
                $data = array_values($data);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "keywords", $data, "PUT");
    }

    /**
     * @param $keywordId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function archiveBiddableKeyword($keywordId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "keywords/{$keywordId}", null, "DELETE");
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listBiddableKeywords(?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "keywords", $data);
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listBiddableKeywordsEx(?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "keywords/extended", $data);
    }

    /**
     * @param $keywordId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function getNegativeKeyword($keywordId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "negativeKeywords/{$keywordId}");
    }

    /**
     * @param $keywordId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function getNegativeKeywordEx($keywordId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "negativeKeywords/extended/{$keywordId}");
    }

    /**
     * @param $data
     * @return array
     * @throws Exception
     */
    public function createNegativeKeywords(array $data)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
                $data = array_values($data);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "negativeKeywords", $data, "POST");
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateNegativeKeywords(array $data)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
                $data = array_values($data);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "negativeKeywords", $data, "PUT");
    }

    /**
     * @param $keywordId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function archiveNegativeKeyword($keywordId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "negativeKeywords/{$keywordId}", null, "DELETE");
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listNegativeKeywords(?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "negativeKeywords", $data);
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listNegativeKeywordsEx(?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "negativeKeywords/extended", $data);
    }

    /**
     * @param $keywordId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function getCampaignNegativeKeyword($keywordId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaignNegativeKeywords/{$keywordId}");
    }

    /**
     * @param $keywordId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function getCampaignNegativeKeywordEx($keywordId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaignNegativeKeywords/extended/{$keywordId}");
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createCampaignNegativeKeywords(array $data)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
                $data = array_values($data);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaignNegativeKeywords", $data, "POST");
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateCampaignNegativeKeywords(array $data)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
                $data = array_values($data);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaignNegativeKeywords", $data, "PUT");
    }

    /**
     * @param $keywordId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function removeCampaignNegativeKeyword($keywordId, ?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaignNegativeKeywords/{$keywordId}", null, "DELETE");
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listCampaignNegativeKeywords(?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaignNegativeKeywords", $data);
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listCampaignNegativeKeywordsEx(?array $data = null)
    {
        $type = $this->campaignTypePrefix ?: 'sp';
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "campaignNegativeKeywords/extended", $data);
    }

    /**
     * @param $productAdId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function getProductAd($productAdId, ?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "productAds/{$productAdId}");
    }

    /**
     * @param $productAdId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function getProductAdEx($productAdId, ?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation("productAds/extended/{$productAdId}");
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createProductAds(array $data)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
                $data = array_values($data);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "productAds", $data, "POST");
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateProductAds(array $data)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
                $data = array_values($data);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "productAds", $data, "PUT");
    }

    /**
     * @param $productAdId
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function archiveProductAd($productAdId, ?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            if (isset($data['campaignType'])) {
                unset($data['campaignType']);
            }
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "productAds/{$productAdId}", null, "DELETE");
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listProductAds(?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation("productAds", $data);
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listProductAdsEx(?array $data = null)
    {
        $type = $this->getCampaignTypeFromData($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
        }

        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "productAds/extended", $data);
    }

    /**
     * @param $adGroupId
     * @return array
     * @throws Exception
     */
    public function getAdGroupBidRecommendations($adGroupId)
    {
        return $this->operation("adGroups/{$adGroupId}/bidRecommendations");
    }

    /**
     * @param $keywordId
     * @return array
     * @throws Exception
     */
    public function getKeywordBidRecommendations($keywordId)
    {
        return $this->operation("keywords/{$keywordId}/bidRecommendations");
    }

    /**
     * @param $adGroupId
     * @param $data
     * @return array
     * @throws Exception
     */
    public function bulkGetKeywordBidRecommendations($adGroupId, $data)
    {
        $data = array(
            "adGroupId" => $adGroupId,
            "keywords" => $data
        );
        return $this->operation("keywords/bidRecommendations", $data, "POST");
    }

    /**
     * @param $data
     * @return array
     * @throws Exception
     */
    public function getAdGroupKeywordSuggestions($data)
    {
        $adGroupId = $data["adGroupId"];
        unset($data["adGroupId"]);
        return $this->operation("adGroups/{$adGroupId}/suggested/keywords", $data);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getAdGroupKeywordSuggestionsEx(array $data)
    {
        $adGroupId = $data["adGroupId"];
        unset($data["adGroupId"]);
        return $this->operation("adGroups/{$adGroupId}/suggested/keywords/extended", $data);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getAsinKeywordSuggestions(array $data)
    {
        $asin = $data["asin"];
        unset($data["asin"]);
        return $this->operation("asins/{$asin}/suggested/keywords", $data);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function bulkGetAsinKeywordSuggestions(array $data)
    {
        return $this->operation("asins/suggested/keywords", $data, "POST");
    }

    /**
     * GET /v2/stores
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getStores(?array $data = null)
    {
        return $this->operation("stores", $data);
    }

    /**
     * GET /v2stores/{$brandEntityId}
     * @param int $brandEntityId
     * @return array
     * @throws Exception
     */
    public function getStoresByBrandEntityId(int $brandEntityId)
    {
        return $this->operation("stores/{$brandEntityId}");
    }

    /**
     * @param $recordType
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function requestSnapshot($recordType, ?array $data = null)
    {
        return $this->operation("{$recordType}/snapshot", $data, "POST");
    }

    /**
     * @param $snapshotId
     * @return array
     * @throws Exception
     */
    public function getSnapshot($snapshotId)
    {
        $req = $this->operation("snapshots/{$snapshotId}");
        if ($req["success"]) {
            $json = json_decode($req["response"], true);
            if ($json["status"] == "SUCCESS") {
                return $this->download($json["location"]);
            }
        }
        return $req;
    }

    /**
     * @param $recordType
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function requestReport($recordType, ?array $data = null)
    {
        $type = $this->getCampaignTypeForReportRequest($data);
        if ($this->apiVersion == 'v1') {
            $type = null;
        } else {
            $type = $type . "/";
            if (is_array($data) && isset($data['reportType'])) {
                unset($data['reportType']);
            }
        }
        if (!$type && $this->apiVersion == 'v2') {
            $this->logAndThrow("Unable to perform request. No type is set");
        }
        return $this->operation($type . "{$recordType}/report", $data, "POST");
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
            : 'sponsoredProducts';
        if ($reportType === 'sponsoredProducts') {
            return 'sp';
        } elseif ($reportType === 'sponsoredBrands') {
            return 'hsa';
        } elseif ($reportType === 'sponsoredDisplay') {
            return 'sd';
        } else {
            throw new Exception("Invalid reportType $reportType");
        }
    }

    /**
     * @param $reportId
     * @return array
     * @throws Exception
     */
    public function getReport($reportId)
    {
        $req = $this->operation("reports/{$reportId}");
        if ($req["success"]) {
            $json = json_decode($req["response"], true);
            if ($json["status"] == "SUCCESS") {
                return $this->download($json["location"]);
            }
        }
        return $req;
    }

    //portfolios part

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listPortfolios(?array $data = null)
    {
        return $this->operation("portfolios", $data);
    }

    /**
     * @param null|array $data
     * @return array
     * @throws Exception
     */
    public function listPortfoliosEx(?array $data = null)
    {
        return $this->operation("portfolios/extended", $data);
    }

    /**
     * @param int $portfolioId
     * @return array
     * @throws Exception
     */
    public function getPortfolio(int $portfolioId)
    {
        return $this->operation('portfolios/' . $portfolioId);
    }

    /**
     * @param int $portfolioId
     * @return array
     * @throws Exception
     */
    public function getPortfolioEx(int $portfolioId)
    {
        return $this->operation('portfolios/extended/' . $portfolioId);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createPortfolios(array $data)
    {
        return $this->operation('portfolios', $data, 'POST');
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updatePortfolios(array $data)
    {
        return $this->operation('portfolios', $data, 'PUT');
    }

    //start of Product Attribute Targeting

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
        return $this->operation("sp/targets/productRecommendations", $data, 'POST');
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/targets/{targetId}
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#getTargetingClause
     *
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getTargetingClause(int $targetId): array
    {
        return $this->operation("sp/targets/" . $targetId);
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/targets/extended/{targetId}
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#getTargetingClauseEx
     *
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getTargetingClauseEx(int $targetId): array
    {
        return $this->operation("sp/targets/extended/" . $targetId);
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/targets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#listTargetingClauses
     *
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listTargetingClauses(?array $data = null): array
    {
        return $this->operation("sp/targets", $data);
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/targets/extended
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#listTargetingClausesEx
     *
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listTargetingClausesEx(?array $data = null): array
    {
        return $this->operation("sp/targets/extended", $data);
    }

    /**
     * POST https://advertising-api.amazon.com/v2/sp/targets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#createTargetingClauses
     *
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createTargetingClauses(array $data): array
    {
        return $this->operation("sp/targets", $data, 'POST');
    }

    /**
     * PUT https://advertising-api.amazon.com/v2/sp/targets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#updateTargetingClauses
     *
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateTargetingClauses(array $data): array
    {
        return $this->operation("sp/targets", $data, 'PUT');
    }

    /**
     * DELETE https://advertising-api.amazon.com/v2/sp/targets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#archiveTargetingClause
     *
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function archiveTargetingClause(int $targetId): array
    {
        return $this->operation("sp/targets/" . $targetId, 'DELETE');
    }


    /**
     * GET https://advertising-api.amazon.com/v2/sp/targets/categories
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#getTargetingCategories
     *
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getTargetingCategories(array $data): array
    {
        return $this->operation("sp/targets/categories", $data);
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
        return $this->operation("sp/targets/brands", $data);
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/targets/{targetId}
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#getNegativeTargetingClause
     *
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getNegativeTargetingClause(int $targetId): array
    {
        return $this->operation("sp/negativeTargets/" . $targetId);
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/negativeTargets/extended/{targetId}
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#getNegativeTargetingClauseEx
     *
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getNegativeTargetingClauseEx(int $targetId): array
    {
        return $this->operation("sp/negativeTargets/extended/" . $targetId);
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/negativeTargets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#listNegativeTargetingClauses
     *
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listNegativeTargetingClauses(?array $data = null): array
    {
        return $this->operation("sp/negativeTargets", $data);
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/negativeTargets/extended
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#listNegativeTargetingClausesEx
     *
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listNegativeTargetingClausesEx(?array $data = null): array
    {
        return $this->operation("sp/negativeTargets/extended", $data);
    }

    //

    /**
     * POST https://advertising-api.amazon.com/v2/sp/negativeTargets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#createNegativeTargetingClauses
     *
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createNegativeTargetingClauses(array $data): array
    {
        return $this->operation("sp/negativeTargets", $data, 'POST');
    }

    /**
     * PUT https://advertising-api.amazon.com/v2/sp/negativeTargets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#updateNegativeTargetingClauses
     *
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateNegativeTargetingClauses(array $data): array
    {
        return $this->operation("sp/negativeTargets", $data, 'PUT');
    }

    /**
     * DELETE https://advertising-api.amazon.com/v2/sp/negativeTargets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#archiveNegativeTargetingClause
     *
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function archiveNegativeTargetingClause(int $targetId): array
    {
        return $this->operation("sp/negativeTargets/" . $targetId, 'DELETE');
    }

    //campaign negative products

    /**
     * GET https://advertising-api.amazon.com/v2/sp/campaignNegatuveTargets/{targetId}
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#getNegativeTargetingClause
     *
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getCampaignNegativeTargetingClause(int $targetId): array
    {
        return $this->operation("sp/campaignNegativeTargets/" . $targetId);
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/campaignNegativeTargets/extended/{targetId}
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#getNegativeTargetingClauseEx
     *
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getCampaignNegativeTargetingClauseEx(int $targetId): array
    {
        return $this->operation("sp/campaignNegativeTargets/extended/" . $targetId);
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/campaignNegativeTargets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#listNegativeTargetingClauses
     *
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listCampaignNegativeTargetingClauses(?array $data = null): array
    {
        return $this->operation("sp/campaignNegativeTargets", $data);
    }

    /**
     * GET https://advertising-api.amazon.com/v2/sp/campaignNegativeTargets/extended
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#listNegativeTargetingClausesEx
     *
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listCampaignNegativeTargetingClausesEx(?array $data = null): array
    {
        return $this->operation("sp/campaignNegativeTargets/extended", $data);
    }

    //

    /**
     * POST https://advertising-api.amazon.com/v2/sp/campaignNegativeTargets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#createNegativeTargetingClauses
     *
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createCampaignNegativeTargetingClauses(array $data): array
    {
        return $this->operation("sp/campaignNegativeTargets", $data, 'POST');
    }

    /**
     * PUT https://advertising-api.amazon.com/v2/sp/campaignNegativeTargets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#updateNegativeTargetingClauses
     *
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateCampaignNegativeTargetingClauses(array $data): array
    {
        return $this->operation("sp/campaignNegativeTargets", $data, 'PUT');
    }

    /**
     * DELETE https://advertising-api.amazon.com/v2/sp/campaignNegativeTargets
     * @see https://advertising.amazon.com/API/docs/v2/reference/product_attribute_targeting#archiveNegativeTargetingClause
     *
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function archiveCampaignNegativeTargetingClause(int $targetId): array
    {
        return $this->operation("sp/campaignNegativeTargets/" . $targetId, 'DELETE');
    }
}
