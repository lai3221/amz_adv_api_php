<p align="center">
    <a href="https://highsidelabs.co" target="_blank">
        <img alt="logo" src="https://raw.githubusercontent.com/lai3221/.github/main/amz_adv_logo.png?raw=true" width="125">
    </a>
</p>

<p align="center">
    <a href="https://packagist.org/packages/lai3221/amzn_adv_api_php"><img alt="Total downloads" src="https://img.shields.io/packagist/dt/lai3221/amzn_adv_api_php.svg?style=flat-square"></a>
    <a href="https://packagist.org/packages/lai3221/amzn_adv_api_php"><img alt="Latest stable version" src="https://img.shields.io/packagist/v/lai3221/amzn_adv_api_php.svg?style=flat-square"></a>
    <a href="https://packagist.org/packages/lai3221/amzn_adv_api_php"><img alt="License" src="https://img.shields.io/packagist/l/lai3221/amzn_adv_api_php.svg?style=flat-square"></a>
</p>
## Synopsis

Official Amazon Advertising API PHP client library.

Version 3.0 OAS 3.0.1

Resources included:
Sponsored Products V3 (Reporting V3)<br/>
Sponsored Brands V4 (Reporting V2)<br/>
Sponsored Display (Reporting V2)<br/>
Accounts<br/>
Reporting<br/>
Stores<br/>
Assets<br/>

## Requirements

PHP >= 7.3<br/>
cURL >= 7.18

## Documentation

[API Reference](https://advertising.amazon.com/API/docs/en-us/reference/api-overview)<br/>
[Getting Started](https://advertising.amazon.com/API/docs/en-us/guides/get-started/overview)

## Tutorials
[Register Sandbox Profile](https://git.io/vPKMl) - This tutorial will show you how to register a profile in sandbox using CURL.<br/>
[Generate and download a report using CURL](https://git.io/vPKPW) - You will need to complete registering a profile in sandbox prior to doing this tutorial.

## Sandbox self-service
If you would like to test the API in sandbox you will need to register a profile for the region in which you would like to test. The `registerProfile` API call can be made to do this. Make sure you instantiate the client in `sandbox` mode before making this call or it will fail.
<br/><br/>
The following country codes are available for testing.
<br/>
> US, CA, UK, DE, FR, ES, IT, IN, CN, JP<br/>



## Quick Start
#### Instantiate the client
> You can pass in `accessToken` if you do not have a refresh token.

```PHP
<?php
namespace AmazonAdvertisingApi;

require_once "src/Client.php";

$config = array(
    'clientId' => 'CLIENT_ID',
    'clientSecret' => 'CLIENT_SECRET',
    'region' => 'NA',
    'accessToken' => 'ACCESS_TOKEN',
    'refreshToken' => 'REFRESH_TOKEN',
    'sandbox' => false,
    'saveFile' => false,
    'apiVersion' => '',
    'sbVersion' => '',
    'spVersion' => '',
    'sdVersion' => '',
    'portfoliosVersion' => '',
    'reportsVersion' => '',
    'appUserAgent' => '',
    'deleteGzipFile' => false,
    'isUseProxy' => false,
    'guzzleProxy' => '',
    'curlProxyType' => 'socks5',
    'curlProxy' => '',
    'headerAccept' => ''
  );

$client = new Client($config);
```
#### Refresh access token
> You can refresh your access token when it expires by using the following method. The new access token will be in the request response. This method will set it for you so it's mainly for reference if you need it.

```PHP
$request = $client->doRefreshToken();
```

#### Get a list of profiles
```PHP
$request = $client->listProfiles();
```
>
```
[{
  "profileId":1234567890,
  "countryCode":"US",
  "currencyCode":"USD",
  "dailyBudget":10.00,
  "timezone":"America/Los_Angeles",
  "accountInfo":{
  "marketplaceStringId":"ABC123",
  "sellerStringId":"DEF456"
}]
```

#### Set profile Id
```PHP
$client->profileId = "1234567890";
```

> Once you've set the profile Id you are ready to start making API calls.

## Example API Calls

* Profiles
    * [listProfiles](#get-a-list-of-profiles)
    * [getProfile](#getprofile)
    * [updateProfiles](#updateprofiles)
* Campaigns
    * [listSponsoredProductsCampaigns](#listCampaigns(SponsoredProducts))
    * [createCampaigns](#createcampaigns)
    * [updateCampaigns](#updatecampaigns)
    * [archiveCampaign](#archivecampaign)
* Ad Groups
    * [listAdGroups](#listadgroups)
    * [getAdGroup](#getadgroup)
    * [createAdGroups](#createadgroups)
    * [updateAdGroups](#updateadgroups)
    * [archiveAdGroup](#archiveadgroup)
* Biddable Keywords
    * [listBiddableKeywords](#listbiddablekeywords)
    * [getBiddableKeyword](#getbiddablekeyword)
    * [createBiddableKeywords](#createbiddablekeywords)
    * [updateBiddableKeywords](#updatebiddablekeywords)
    * [archiveBiddableKeyword](#archivebiddablekeyword)
* Negative Keywords
    * [listNegativeKeywords](#listnegativekeywords)
    * [getNegativeKeyword](#getnegativekeyword)
    * [createNegativeKeywords](#createnegativekeywords)
    * [updateNegativeKeywords](#updatenegativekeywords)
    * [archiveNegativeKeyword](#archivenegativekeyword)
* Campaign Negative Keywords
    * [listCampaignNegativeKeywords](#listcampaignnegativekeywords)
    * [getCampaignNegativeKeyword](#getcampaignnegativekeyword)
    * [createCampaignNegativeKeywords](#createcampaignnegativekeywords)
    * [updateCampaignNegativeKeywords](#updatecampaignnegativekeywords)
    * [removeCampaignNegativeKeyword](#removecampaignnegativekeyword)
* Product Ads
    * [listProductAds](#listproductads)
    * [getProductAd](#getproductad)
    * [createProductAds](#createproductads)
    * [updateProductAds](#updateproductads)
    * [archiveProductAd](#archiveproductad)
* Snapshots
    * [requestSnapshot](#requestsnapshot)
    * [getSnapshot](#getsnapshot)
* Reports
    * [requestReport](#requestreport)
    * [getReport](#getreport)
* Bid Recommendations
    * [getAdGroupBidRecommendations](#getadgroupbidrecommendations)
    * [getKeywordBidRecommendations](#getkeywordbidrecommendations)
    * [bulkGetKeywordBidRecommendations](#bulkgetkeywordbidrecommendations)
* Keyword Suggestions
  * [getAdGroupKeywordSuggestions](#getadgroupkeywordsuggestions)
  * [getAdGroupKeywordSuggestionsEx](#getadgroupkeywordsuggestionsex)
  * [getAsinKeywordSuggestions](#getasinkeywordsuggestions)
  * [bulkGetAsinKeywordSuggestions](#bulkgetasinkeywordsuggestions)

#### getProfile
> Retrieves a single profile by Id.

```PHP
$client->getProfile("1234567890");
```
>
```
{
  "profileId": 1234567890,
  "countryCode": "US",
  "currencyCode": "USD",
  "dailyBudget": 3.99,
  "timezone": "America/Los_Angeles",
  "accountInfo": {
    "marketplaceStringId": "ABC123",
    "sellerStringId": "DEF456"
  }
}
```

---
#### updateProfiles
> Updates one or more profiles.  Advertisers are identified using their `profileIds`.

```PHP
$client->updateProfiles(
   array(
       array(
           "profileId" => $client->profileId,
           "dailyBudget" => 3.99),
       array(
           "profileId" => 11223344,
           "dailyBudget" => 6.00)));

```
>
```
[
  {
    "code": "SUCCESS",
    "profileId": 1234567890
  },
  {
    "code": "NOT_FOUND",
    "description": "Profile with id 11223344 was not found for this advertiser.",
    "profileId": 0
  }
]
```

---
#### listCampaigns(SponsoredProducts)
> Retrieves a list of campaigns satisfying optional criteria.

```PHP
$client->listSponsoredProductsCampaigns(array("campaignIdFilter" => ['include' => ["ENABLED", "PAUSED"]]));
```
>
```
{
  "totalResults": 0,
  "campaigns": [
    {
      "portfolioId": "string",
      "endDate": "2019-08-24",
      "campaignId": "string",
      "name": "string",
      "targetingType": "AUTO",
      "state": "ENABLED",
      "dynamicBidding": {
        "placementBidding": [
          {
            "percentage": 900,
            "placement": "PLACEMENT_TOP"
          }
        ],
        "strategy": "LEGACY_FOR_SALES"
      },
      "startDate": "2019-08-24",
      "budget": {
        "budgetType": "DAILY",
        "budget": 0,
        "effectiveBudget": 0
      },
      "tags": {
        "property1": "string",
        "property2": "string"
      },
      "extendedData": {
        "lastUpdateDateTime": "2019-08-24T14:15:22Z",
        "servingStatus": "CAMPAIGN_STATUS_ENABLED",
        "servingStatusDetails": [
          {
            "name": "CAMPAIGN_STATUS_ENABLED_DETAIL",
            "helpUrl": "string",
            "message": "string"
          }
        ],
        "creationDateTime": "2019-08-24T14:15:22Z"
      }
    }
  ],
  "nextToken": "string"
}
```

#### createCampaigns
> Creates one or more campaigns. Successfully created campaigns will be assigned unique `campaignId`s.

```PHP
$client->createSponsoredProductsCampaigns(
   [
    "campaigns" =>[
        [
            "portfolioId" =>"string",
            "endDate" =>"2019-08-24",
            "name" =>"string",
            "targetingType" =>"AUTO",
            "state" =>"ENABLED",
            "dynamicBidding" => [
                "placementBidding" =>[
                    [
                        "percentage" =>900,
                        "placement" =>"PLACEMENT_TOP"
                    ]
                ],
                "strategy" =>"LEGACY_FOR_SALES"
            ],
            "startDate" =>"2019-08-24",
            "budget" => [
                "budgetType" =>"DAILY",
                "budget" =>0
            ],
            "tags" => [
                "property1" =>"string",
                "property2" =>"string"
            ]
        ]
    ]
]);
```
>
```
{
  "campaigns": {
    "success": [
      {
        "campaignId": "string",
        "index": 0,
        "campaign": {
          "portfolioId": "string",
          "endDate": "2019-08-24",
          "campaignId": "string",
          "name": "string",
          "targetingType": "AUTO",
          "state": "ENABLED",
          "dynamicBidding": {
            "placementBidding": [
              {
                "percentage": 900,
                "placement": "PLACEMENT_TOP"
              }
            ],
            "strategy": "LEGACY_FOR_SALES"
          },
          "startDate": "2019-08-24",
          "budget": {
            "budgetType": "DAILY",
            "budget": 0,
            "effectiveBudget": 0
          },
          "tags": {
            "property1": "string",
            "property2": "string"
          },
          "extendedData": {
            "lastUpdateDateTime": "2019-08-24T14:15:22Z",
            "servingStatus": "CAMPAIGN_STATUS_ENABLED",
            "servingStatusDetails": [
              {
                "name": "CAMPAIGN_STATUS_ENABLED_DETAIL",
                "helpUrl": "string",
                "message": "string"
              }
            ],
            "creationDateTime": "2019-08-24T14:15:22Z"
          }
        }
      }
    ],
    "error": [
      {
        "index": 0,
        "errors": [
          {
            "errorType": "string",
            "errorValue": {
              "entityStateError": {
                "reason": "INVALID_TARGET_STATE",
                "marketplace": "US",
                "entityType": "CAMPAIGN",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "missingValueError": {
                "reason": "MISSING_VALUE",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "dateError": {
                "reason": "INVALID_DATE",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "biddingError": {
                "reason": "BID_GT_BUDGET",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "upperLimit": "string",
                "lowerLimit": "string",
                "message": "string"
              },
              "duplicateValueError": {
                "reason": "DUPLICATE_VALUE",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "rangeError": {
                "reason": "TOO_LOW",
                "marketplace": "US",
                "allowed": [
                  "string"
                ],
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "upperLimit": "string",
                "lowerLimit": "string",
                "message": "string"
              },
              "parentEntityError": {
                "reason": "PARENT_ENTITY_DOES_NOT_TARGET_THESE_MARKETPLACES",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "otherError": {
                "reason": "OTHER_ERROR",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "throttledError": {
                "reason": "THROTTLED",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "entityNotFoundError": {
                "reason": "ENTITY_NOT_FOUND",
                "entityType": "CAMPAIGN",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "entityId": "string",
                "message": "string"
              },
              "malformedValueError": {
                "reason": "FORBIDDEN_CHARS",
                "fragment": "string",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "budgetError": {
                "reason": "BUDGET_TOO_LOW",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "upperLimit": "string",
                "lowerLimit": "string",
                "message": "string"
              },
              "currencyError": {
                "reason": "PREFERRED_CURRENCY_NOT_SET",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "billingError": {
                "reason": "ADVERTISER_SUSPENDED",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "entityQuotaError": {
                "reason": "QUOTA_EXCEEDED",
                "quotaScope": "ACCOUNT",
                "entityType": "CAMPAIGN",
                "quota": "string",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "internalServerError": {
                "reason": "INTERNAL_ERROR",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              }
            }
          }
        ]
      }
    ]
  }
}
```

---
#### updateCampaigns
> Updates one or more campaigns. Campaigns are identified using their `campaignId`s.

```PHP
$client->updateSponsoredProductsCampaigns(
  [
    "campaigns" =>[
        [
            "portfolioId" =>"string",
            "endDate" =>"2019-08-24",
            "campaignId" =>"string",
            "name" =>"string",
            "targetingType" =>"AUTO",
            "state" =>"ENABLED",
            "dynamicBidding" => [
                "placementBidding" =>[
                    [
                        "percentage" =>900,
                        "placement" =>"PLACEMENT_TOP"
                    ]
                ],
                "strategy" =>"LEGACY_FOR_SALES"
            ],
            "startDate" =>"2019-08-24",
            "budget" => [
                "budgetType" =>"DAILY",
                "budget" =>0
            ],
            "tags" => [
                "property1" =>"string",
                "property2" =>"string"
            ]
        ]
    ]
] 
  );
```
>
```
{
  "campaigns": {
    "success": [
      {
        "campaignId": "string",
        "index": 0,
        "campaign": {
          "portfolioId": "string",
          "endDate": "2019-08-24",
          "campaignId": "string",
          "name": "string",
          "targetingType": "AUTO",
          "state": "ENABLED",
          "dynamicBidding": {
            "placementBidding": [
              {
                "percentage": 900,
                "placement": "PLACEMENT_TOP"
              }
            ],
            "strategy": "LEGACY_FOR_SALES"
          },
          "startDate": "2019-08-24",
          "budget": {
            "budgetType": "DAILY",
            "budget": 0,
            "effectiveBudget": 0
          },
          "tags": {
            "property1": "string",
            "property2": "string"
          },
          "extendedData": {
            "lastUpdateDateTime": "2019-08-24T14:15:22Z",
            "servingStatus": "CAMPAIGN_STATUS_ENABLED",
            "servingStatusDetails": [
              {
                "name": "CAMPAIGN_STATUS_ENABLED_DETAIL",
                "helpUrl": "string",
                "message": "string"
              }
            ],
            "creationDateTime": "2019-08-24T14:15:22Z"
          }
        }
      }
    ],
    "error": [
      {
        "index": 0,
        "errors": [
          {
            "errorType": "string",
            "errorValue": {
              "entityStateError": {
                "reason": "INVALID_TARGET_STATE",
                "marketplace": "US",
                "entityType": "CAMPAIGN",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "missingValueError": {
                "reason": "MISSING_VALUE",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "dateError": {
                "reason": "INVALID_DATE",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "biddingError": {
                "reason": "BID_GT_BUDGET",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "upperLimit": "string",
                "lowerLimit": "string",
                "message": "string"
              },
              "duplicateValueError": {
                "reason": "DUPLICATE_VALUE",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "rangeError": {
                "reason": "TOO_LOW",
                "marketplace": "US",
                "allowed": [
                  "string"
                ],
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "upperLimit": "string",
                "lowerLimit": "string",
                "message": "string"
              },
              "parentEntityError": {
                "reason": "PARENT_ENTITY_DOES_NOT_TARGET_THESE_MARKETPLACES",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "otherError": {
                "reason": "OTHER_ERROR",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "throttledError": {
                "reason": "THROTTLED",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "entityNotFoundError": {
                "reason": "ENTITY_NOT_FOUND",
                "entityType": "CAMPAIGN",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "entityId": "string",
                "message": "string"
              },
              "malformedValueError": {
                "reason": "FORBIDDEN_CHARS",
                "fragment": "string",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "budgetError": {
                "reason": "BUDGET_TOO_LOW",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "upperLimit": "string",
                "lowerLimit": "string",
                "message": "string"
              },
              "currencyError": {
                "reason": "PREFERRED_CURRENCY_NOT_SET",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "billingError": {
                "reason": "ADVERTISER_SUSPENDED",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "entityQuotaError": {
                "reason": "QUOTA_EXCEEDED",
                "quotaScope": "ACCOUNT",
                "entityType": "CAMPAIGN",
                "quota": "string",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "internalServerError": {
                "reason": "INTERNAL_ERROR",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              }
            }
          }
        ]
      }
    ]
  }
}
```

---
#### archiveCampaign
> Sets the campaign status to archived. This same operation can be performed via an update, but is included for completeness.

```PHP
$client->deleteSponsoredProductsCampaigns(
[
    "campaignIdFilter" => [
        "include" =>[
            "string"
        ]
    ]
]
);
```
>
```
{
  "campaigns": {
    "success": [
      {
        "campaignId": "string",
        "index": 0,
        "campaign": {
          "portfolioId": "string",
          "endDate": "2019-08-24",
          "campaignId": "string",
          "name": "string",
          "targetingType": "AUTO",
          "state": "ENABLED",
          "dynamicBidding": {
            "placementBidding": [
              {
                "percentage": 900,
                "placement": "PLACEMENT_TOP"
              }
            ],
            "strategy": "LEGACY_FOR_SALES"
          },
          "startDate": "2019-08-24",
          "budget": {
            "budgetType": "DAILY",
            "budget": 0,
            "effectiveBudget": 0
          },
          "tags": {
            "property1": "string",
            "property2": "string"
          },
          "extendedData": {
            "lastUpdateDateTime": "2019-08-24T14:15:22Z",
            "servingStatus": "CAMPAIGN_STATUS_ENABLED",
            "servingStatusDetails": [
              {
                "name": "CAMPAIGN_STATUS_ENABLED_DETAIL",
                "helpUrl": "string",
                "message": "string"
              }
            ],
            "creationDateTime": "2019-08-24T14:15:22Z"
          }
        }
      }
    ],
    "error": [
      {
        "index": 0,
        "errors": [
          {
            "errorType": "string",
            "errorValue": {
              "entityStateError": {
                "reason": "INVALID_TARGET_STATE",
                "marketplace": "US",
                "entityType": "CAMPAIGN",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "missingValueError": {
                "reason": "MISSING_VALUE",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "dateError": {
                "reason": "INVALID_DATE",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "biddingError": {
                "reason": "BID_GT_BUDGET",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "upperLimit": "string",
                "lowerLimit": "string",
                "message": "string"
              },
              "duplicateValueError": {
                "reason": "DUPLICATE_VALUE",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "rangeError": {
                "reason": "TOO_LOW",
                "marketplace": "US",
                "allowed": [
                  "string"
                ],
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "upperLimit": "string",
                "lowerLimit": "string",
                "message": "string"
              },
              "parentEntityError": {
                "reason": "PARENT_ENTITY_DOES_NOT_TARGET_THESE_MARKETPLACES",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "otherError": {
                "reason": "OTHER_ERROR",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "throttledError": {
                "reason": "THROTTLED",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "entityNotFoundError": {
                "reason": "ENTITY_NOT_FOUND",
                "entityType": "CAMPAIGN",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "entityId": "string",
                "message": "string"
              },
              "malformedValueError": {
                "reason": "FORBIDDEN_CHARS",
                "fragment": "string",
                "marketplace": "US",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "budgetError": {
                "reason": "BUDGET_TOO_LOW",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "upperLimit": "string",
                "lowerLimit": "string",
                "message": "string"
              },
              "currencyError": {
                "reason": "PREFERRED_CURRENCY_NOT_SET",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "billingError": {
                "reason": "ADVERTISER_SUSPENDED",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "entityQuotaError": {
                "reason": "QUOTA_EXCEEDED",
                "quotaScope": "ACCOUNT",
                "entityType": "CAMPAIGN",
                "quota": "string",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              },
              "internalServerError": {
                "reason": "INTERNAL_ERROR",
                "cause": {
                  "location": "string",
                  "trigger": "string"
                },
                "message": "string"
              }
            }
          }
        ]
      }
    ]
  }
}
```

---
#### listAdGroups
> Retrieves a list of ad groups satisfying optional criteria.

```PHP
$client->listAdGroups(array("stateFilter" => "enabled"));
```
>
```
[
  {
    "adGroupId": 262960563101486,
    "name": "AdGroup One",
    "campaignId": 181483024866689,
    "defaultBid": 1.0,
    "state": "enabled"
  },
  {
    "adGroupId": 52169162825843,
    "name": "AdGroup Two",
    "campaignId": 250040549047739,
    "defaultBid": 2.0,
    "state": "enabled"
  }
]
```

---
#### getAdGroup
> Retrieves an ad group by Id. Note that this call returns the minimal set of ad group fields, but is more efficient than `getAdGroupEx`.

```PHP
$client->getAdGroup(262960563101486);
```
>
```
{
  "adGroupId": 262960563101486,
  "name": "AdGroup One",
  "campaignId": 181483024866689,
  "defaultBid": 1.0,
  "state": "enabled"
}
```

---
#### createAdGroups
> Creates one or more ad groups. Successfully created ad groups will be assigned unique `adGroupId`s.

```PHP
$client->createAdGroups(
    array(
        array(
            "campaignId" => 250040549047739,
            "name" => "New AdGroup One",
            "state" => "enabled",
            "defaultBid" => 2.0),
        array(
            "campaignId" => 59836775211065,
            "name" => "New AdGroup Two",
            "state" => "enabled",
            "defaultBid" => 5.0)));
```
>
```
[
  {
    "code": "SUCCESS",
    "adGroupId": 117483076163518
  },
  {
    "code": "SUCCESS",
    "adGroupId": 123431426718271
  }
]
```

---
#### updateAdGroups
> Updates one or more ad groups. Ad groups are identified using their `adGroupId`s.

```PHP
$client->updateAdGroups(
    array(
        array(
            "adGroupId" => 117483076163518,
            "state" => "enabled",
            "defaultBid" => 20.0),
        array(
            "adGroupId" => 123431426718271,
            "state" => "enabled",
            "defaultBid" => 15.0)));
```
>
```
[
  {
    "code": "SUCCESS",
    "adGroupId": 117483076163518
  },
  {
    "code": "SUCCESS",
    "adGroupId": 123431426718271
  }
]
```

---
#### archiveAdGroup
> Sets the ad group status to archived. This same operation can be performed via an update, but is included for completeness.

```PHP
$client->archiveAdGroup(117483076163518);
```
>
```
{
  "code": "SUCCESS",
  "adGroupId": 117483076163518
}
```

---
#### listBiddableKeywords
> Retrieves a list of keywords satisfying optional criteria.

```PHP
$client->listBiddableKeywords(array("stateFilter" => "enabled"));
```
>
```
[
  {
    "keywordId": 174140697976855,
    "adGroupId": 52169162825843,
    "campaignId": 250040549047739,
    "keywordText": "KeywordOne",
    "matchType": "exact",
    "state": "enabled"
  },
  {
    "keywordId": 118195812188994,
    "adGroupId": 52169162825843,
    "campaignId": 250040549047739,
    "keywordText": "KeywordTwo",
    "matchType": "exact",
    "state": "enabled"
  }
]
```

---
#### getBiddableKeyword
> Retrieves a keyword by Id. Note that this call returns the minimal set of keyword fields, but is more efficient than  getBiddableKeywordEx.

```PHP
$client->getBiddableKeyword(174140697976855);
```
>
```
{
  "keywordId": 174140697976855,
  "adGroupId": 52169162825843,
  "campaignId": 250040549047739,
  "keywordText": "KeywordOne",
  "matchType": "exact",
  "state": "enabled"
}
```

---
#### createBiddableKeywords
> Creates one or more keywords. Successfully created keywords will be assigned unique `keywordId`s.

```PHP
$client->createBiddableKeywords(
    array(
        array(
            "campaignId" => 250040549047739,
            "adGroupId" => 52169162825843,
            "keywordText" => "AnotherKeyword",
            "matchType" => "exact",
            "state" => "enabled"),
        array(
            "campaignId" => 250040549047739,
            "adGroupId" => 52169162825843,
            "keywordText" => "YetAnotherKeyword",
            "matchType" => "exact",
            "state" => "enabled")));
```
>
```
[
  {
    "code": "SUCCESS",
    "keywordId": 112210768353976
  },
  {
    "code": "SUCCESS",
    "keywordId": 249490346605943
  }
]
```

---
#### updateBiddableKeywords
> Updates one or more keywords. Keywords are identified using their `keywordId`s.

```PHP
$client->updateBiddableKeywords(
       array(
           array(
               "keywordId" => 112210768353976,
               "bid" => 100.0,
               "state" => "archived"),
           array(
               "keywordId" => 249490346605943,
               "bid" => 50.0,
               "state" => "archived")));
```
>
```
[
  {
    "code": "SUCCESS",
    "keywordId": 112210768353976
  },
  {
    "code": "SUCCESS",
    "keywordId": 249490346605943
  }
]
```

---
#### archiveBiddableKeyword
> Sets the keyword status to archived. This same operation can be performed via an update, but is included for completeness.

```PHP
$client->archiveBiddableKeyword(112210768353976);
```
>
```
{
  "code": "200",
  "requestId": "0TR95PJD6Z16FFCZDXD0"
}
```

---
#### listNegativeKeywords
> Retrieves a list of negative keywords satisfying optional criteria.

```PHP
$client->listNegativeKeywords(array("stateFilter" => "enabled"));
```
>
```
[
  {
    "keywordId": 281218602770639,
    "adGroupId": 52169162825843,
    "campaignId": 250040549047739,
    "keywordText": "KeywordOne",
    "matchType": "negativeExact",
    "state": "enabled"
  },
  {
    "keywordId": 280875877064090,
    "adGroupId": 262960563101486,
    "campaignId": 181483024866689,
    "keywordText": "KeywordTwo",
    "matchType": "negativeExact",
    "state": "enabled"
  }
]
```

---
#### getNegativeKeyword
> Retrieves a negative keyword by Id. Note that this call returns the minimal set of keyword fields, but is more efficient than `getNegativeKeywordEx`.

```PHP
$client->getNegativeKeyword(281218602770639);
```
>
```
{
  "keywordId": 281218602770639,
  "adGroupId": 52169162825843,
  "campaignId": 250040549047739,
  "keywordText": "KeywordOne",
  "matchType": "negativeExact",
  "state": "enabled"
}
```

---
#### createNegativeKeywords
> Creates one or more negative keywords. Successfully created keywords will be assigned unique keywordIds.

```PHP
$client->createNegativeKeywords(
    array(
        array(
            "campaignId" => 250040549047739,
            "adGroupId" => 52169162825843,
            "keywordText" => "AnotherKeyword",
            "matchType" => "negativeExact",
            "state" => "enabled"),
        array(
            "campaignId" => 181483024866689,
            "adGroupId" => 262960563101486,
            "keywordText" => "YetAnotherKeyword",
            "matchType" => "negativeExact",
            "state" => "enabled")));
```
>
```
[
  {
    "code": "SUCCESS",
    "keywordId": 61857817062026
  },
  {
    "code": "SUCCESS",
    "keywordId": 147623067066967
  }
]
```

---
#### updateNegativeKeywords
> Updates one or more negative keywords. Keywords are identified using their `keywordId`s.

```PHP
$client->updateNegativeKeywords(
       array(
           array(
               "keywordId" => 61857817062026,
               "state" => "enabled",
               "bid" => 15.0),
           array(
               "keywordId" => 61857817062026,
               "state" => "enabled",
               "bid" => 20.0)));
```
>
```
[
  {
    "code": "SUCCESS",
    "keywordId": 61857817062026
  },
  {
    "code": "INVALID_ARGUMENT",
    "description": "Entity with id 61857817062026 already specified in this update operation."
  }
]
```

---
#### archiveNegativeKeyword
> Sets the negative keyword status to archived. This same operation can be performed via an update to the status, but is included for completeness.

```PHP
$client->archiveNegativeKeyword(61857817062026);
```
>
```
{
  "code": "SUCCESS",
  "keywordId": 61857817062026
}
```

---
#### listCampaignNegativeKeywords
> Retrieves a list of negative campaign keywords satisfying optional criteria.

```PHP
$client->listCampaignNegativeKeywords(array("matchTypeFilter" => "negativeExact"));
```
>
```
[
  {
    "keywordId": 131747786239884,
    "adGroupId": null,
    "campaignId": 181483024866689,
    "keywordText": "Negative Keyword",
    "matchType": "negativeExact",
    "state": "enabled"
  },
  {
    "keywordId": 197201372210821,
    "adGroupId": null,
    "campaignId": 181483024866689,
    "keywordText": "My Negative Keyword",
    "matchType": "negativeExact",
    "state": "enabled"
  }
]
```

---
#### getCampaignNegativeKeyword
> Retrieves a campaign negative keyword by Id. Note that this call returns the minimal set of keyword fields, but is more efficient than `getCampaignNegativeKeywordEx`.

```PHP
$client->getCampaignNegativeKeyword(197201372210821);
```
>
```
{
  "keywordId": 197201372210821,
  "adGroupId": null,
  "campaignId": 181483024866689,
  "keywordText": "My Negative Keyword",
  "matchType": "negativeExact",
  "state": "enabled"
}
```

---
#### createCampaignNegativeKeywords
> Creates one or more campaign negative keywords. Successfully created keywords will be assigned unique `keywordId`s.

```PHP
$client->createCampaignNegativeKeywords(
       array(
           array(
               "campaignId" => 181483024866689,
               "keywordText" => "Negative Keyword One",
               "matchType" => "negativeExact",
               "state" => "enabled"),
           array(
               "campaignId" => 181483024866689,
               "keywordText" => "Negative Keyword Two",
               "matchType" => "negativeExact",
               "state" => "enabled")));
```
>
```
[
  {
    "code": "SUCCESS",
    "keywordId": 196797670902082
  },
  {
    "code": "SUCCESS",
    "keywordId": 186203479904657
  }
]
```

---
#### updateCampaignNegativeKeywords
> Updates one or more campaign negative keywords. Keywords are identified using their `keywordId`s.

> Campaign negative keywords can currently only be removed.

---
#### removeCampaignNegativeKeyword
> Sets the campaign negative keyword status to deleted. This same operation can be performed via an update to the status, but is included for completeness.

```PHP
$client->removeCampaignNegativeKeyword(186203479904657);
```
>
```
{
  "code": "SUCCESS",
  "keywordId": 186203479904657
}
```

---
#### listProductAds
> Retrieves a list of product ads satisfying optional criteria.

```PHP
$client->listProductAds(array("stateFilter" => "enabled"));
```
>
```
[
  {
    "adId": 247309761200483,
    "adGroupId": 262960563101486,
    "campaignId": 181483024866689,
    "sku": "TEST001",
    "state": "enabled"
  }
]
```

---
#### getProductAd
> Retrieves a product ad by Id. Note that this call returns the minimal set of product ad fields, but is more efficient than `getProductAdEx`.

```PHP
$client->getProductAd(247309761200483);
```
>
```
{
  "adId": 247309761200483,
  "adGroupId": 262960563101486,
  "campaignId": 181483024866689,
  "sku": "TEST001",
  "state": "enabled"
}
```

---
#### createProductAds
> Creates one or more product ads. Successfully created product ads will be assigned unique `adId`s.

```PHP
$client->createProductAds(
    array(
        array(
            "campaignId" => 181483024866689,
            "adGroupId" => 262960563101486,
            "sku" => "TEST002",
            "state" => "enabled"),
        array(
            "campaignId" => 181483024866689,
            "adGroupId" => 262960563101486,
            "sku" => "TEST003",
            "state" => "enabled")));
```
>
```
[
  {
    "code": "SUCCESS",
    "adId": 239870616623537
  },
  {
    "code": "SUCCESS",
    "adId": 191456410590622
  }
]
```

---
#### updateProductAds
> Updates one or more product ads. Product ads are identified using their `adId`s.

```PHP
$client->updateProductAds(
    array(
        array(
            "adId" => 239870616623537,
            "state" => "archived"),
        array(
            "adId" => 191456410590622,
            "state" => "archived")));
```
>
```
[
  {
    "code": "SUCCESS",
    "adId": 239870616623537
  },
  {
    "code": "SUCCESS",
    "adId": 191456410590622
  }
]
```

---
#### archiveProductAd
> Sets the product ad status to archived. This same operation can be performed via an update, but is included for completeness.

```PHP
$client->archiveProductAd(239870616623537);
```
>
```
{
  "code": "SUCCESS",
  "adId": 239870616623537
}
```

---
#### requestSnapshot
> Request a snapshot report for all entities of a single type.

```PHP
$client->requestSnapshot(
    "campaigns",
    array("stateFilter" => "enabled,paused,archived",
          "campaignType" => "sponsoredProducts"));
```
>
```
{
  "snapshotId": "amzn1.clicksAPI.v1.p1.573A0477.ec41773a-1659-4013-8eb9-fa18c87ef5df",
  "recordType": "campaign",
  "status": "IN_PROGRESS"
}
```

---
#### getSnapshot
> Retrieve a previously requested report.

```PHP
$client->getSnapshot("amzn1.clicksAPI.v1.p1.573A0477.ec41773a-1659-4013-8eb9-fa18c87ef5df");
```
>
```
[
  {
    "campaignId": 181483024866689,
    "name": "Campaign One",
    "campaignType": "sponsoredProducts",
    "targetingType": "manual",
    "dailyBudget": 5.0,
    "startDate": "20160330",
    "state": "archived"
  },
  {
    "campaignId": 59836775211065,
    "name": "Campaign Two",
    "campaignType": "sponsoredProducts",
    "targetingType": "manual",
    "dailyBudget": 10.99,
    "startDate": "20160330",
    "state": "archived"
  },
  {
    "campaignId": 254238342004647,
    "name": "Campaign Three",
    "campaignType": "sponsoredProducts",
    "targetingType": "manual",
    "dailyBudget": 99.99,
    "startDate": "20160510",
    "state": "enabled"
  }
]
```

---
#### requestReport
> Request a customized performance report for all entities of a single type which have performance data to report.
campaignType enum:sb, sd, sp
```PHP
$client->requestReport(
    "campaigns",
    array("reportDate" => "20160515",
          "campaignType" => "sp",
          "metrics" => "impressions,clicks,cost"));
```
>
```
{
  "reportId": "amzn1.clicksAPI.v1.m1.573A0808.32908def-66a1-4ce2-8f12-780dc4ae1d43",
  "recordType": "campaign",
  "status": "IN_PROGRESS",
  "statusDetails": "Report is submitted"
}
```

---
#### getReport
> Retrieve a previously requested report.

```PHP
$client->getReport("amzn1.clicksAPI.v1.m1.573A0808.32908def-66a1-4ce2-8f12-780dc4ae1d43");
```
> Sandbox will return dummy data.
```
[
  {
    "cost": 647.75,
    "campaignId": 230751293360275,
    "clicks": 2591,
    "impressions": 58288
  },
  {
    "cost": 619.5,
    "campaignId": 52110033002744,
    "clicks": 2478,
    "impressions": 68408
  },
  {
    "cost": 151.91,
    "campaignId": 140739567440917,
    "clicks": 633,
    "impressions": 17343
  },
  {
    "cost": 143.46,
    "campaignId": 79132327246328,
    "clicks": 797,
    "impressions": 48903
  }
]
```

---
#### getAdGroupBidRecommendations
> Request bid recommendations for specified ad group.

```PHP
$client->getAdGroupBidRecommendations(1234509876);
```
>
```
{
  "adGroupId": 1234509876,
  "suggestedBid": {
    "rangeEnd": 2.16,
    "rangeStart": 0.67,
    "suggested": 1.67
  }
}
```

---
#### getKeywordBidRecommendations
> Request bid recommendations for specified keyword.

```PHP
$client->getKeywordBidRecommendations(85243141758914);
```
>
```
{
  "keywordId": 85243141758914,
  "adGroupId": 252673310548066,
  "suggestedBid": {
    "rangeEnd": 3.18,
    "rangeStart": 0.35,
    "suggested": 2.97
  }
}
```

---
#### bulkGetKeywordBidRecommendations
> Request bid recommendations for a list of up to 100 keywords.

```PHP
$client->bulkGetKeywordBidRecommendations(
    242783265349805,
    array(
        array("keyword" => "testKeywordOne",
              "matchType" => "exact"),
        array("keyword" => "testKeywordTwo",
              "matchType" => "exact")
    ));
```
>
```
{
  "adGroupId": 242783265349805,
  "recommendations": [
    {
      "code": "SUCCESS",
      "keyword": "testKeywordOne",
      "matchType": "exact",
      "suggestedBid": {
        "rangeEnd": 2.67,
        "rangeStart": 0.38,
        "suggested": 2.07
      }
    },
    {
      "code": "SUCCESS",
      "keyword": "testKeywordTwo",
      "matchType": "exact",
      "suggestedBid": {
        "rangeEnd": 3.19,
        "rangeStart": 0.79,
        "suggested": 3.03
      }
    }
  ]
}
```

---
#### getAdGroupKeywordSuggestions
> Request keyword suggestions for specified ad group.

```PHP
$client->getAdGroupKeywordSuggestions(
    array("adGroupId" => 1234567890,
          "maxNumSuggestions" => 2,
          "adStateFilter" => "enabled"));
```
>
```
{
  "adGroupId": 1234567890,
  "suggestedKeywords": [
    {
      "keywordText": "keyword PRODUCT_AD_A 1",
      "matchType": "broad"
    },
    {
      "keywordText": "keyword PRODUCT_AD_B 1",
      "matchType": "broad"
    }
  ]
}
```

---
#### getAdGroupKeywordSuggestionsEx
> Request keyword suggestions for specified ad group, extended version. Adds the ability to return bid recommendation for returned keywords.

```PHP
$client->getAdGroupKeywordSuggestionsEx(
    array("adGroupId" => 1234567890,
          "maxNumSuggestions" => 2,
          "suggestBids" => "yes",
          "adStateFilter" => "enabled"));
```
>
```
[
  {
    "adGroupId": 1234567890,
    "campaignId": 0987654321,
    "keywordText": "keyword TESTASINXX 1",
    "matchType": "broad",
    "state": "enabled",
    "bid": 1.84
  },
  {
    "adGroupId": 1234567890,
    "campaignId": 0987654321,
    "keywordText": "keyword TESTASINXX 2",
    "matchType": "broad",
    "state": "enabled",
    "bid": 1.07
  }
]
```

---
#### getAsinKeywordSuggestions
> Request keyword suggestions for specified asin.

```PHP
$client->getAsinKeywordSuggestions(
    array("asin" => "B00IJSNPM0",
          "maxNumSuggestions" => 2));
```
>
```
[
  {
    "keywordText": "keyword B00IJSNPM0 1",
    "matchType": "broad"
  },
  {
    "keywordText": "keyword B00IJSNPM0 2",
    "matchType": "broad"
  }
]
```

---
#### bulkGetAsinKeywordSuggestions
> Request keyword suggestions for a list of asin.

```PHP
$client->bulkGetAsinKeywordSuggestions(
    array("asins" => array(
              "B00IJSNPM0",
              "B00IJSO1NM"),
          "maxNumSuggestions" => 2));
```
>
```
[
  {
    "keywordText": "keyword B00IJSNPM0 1",
    "matchType": "broad"
  },
  {
    "keywordText": "keyword B00IJSO1NM 1",
    "matchType": "broad"
  }
]
```
