<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait AmazonAttributionRequests
 * Contains requests' wrappers of Amazon Ads API for Amazon Attribution.
 * Set Client::profileId before calling any of these endpoints.
 * @see https://advertising.amazon.com/API/docs/en-us/amazon-attribution-prod-3p
 */
trait AmazonAttributionRequests
{
    /**
     * @return array
     */
    private function amazonAttributionHeaders(): array
    {
        return [
            'Accept: application/json',
            'Content-Type: application/json',
        ];
    }

    /**
     * Gets a list of advertisers associated with an Amazon Attribution account.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-attribution-prod-3p#tag/Advertisers/operation/getAdvertisersByProfile
     * @return array
     * @throws Exception
     */
    public function getAdvertisersByProfile(): array
    {
        return $this->operation(
            'attribution/advertisers',
            null,
            'GET',
            true,
            $this->amazonAttributionHeaders()
        );
    }

    /**
     * Gets a list of all available publishers and their supported tag types.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-attribution-prod-3p#tag/Publishers/operation/getPublishers
     * @return array
     * @throws Exception
     */
    public function getPublishers(): array
    {
        return $this->operation(
            'attribution/publishers',
            null,
            'GET',
            true,
            $this->amazonAttributionHeaders()
        );
    }

    /**
     * Gets attribution tags for publisher campaigns that support macros.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-attribution-prod-3p#tag/Attribution-Tags/operation/getPublisherAttributionTagTemplate
     * @param array $data Required publisherIds array; optional advertiserIds array.
     * @return array
     * @throws Exception
     */
    public function getPublisherAttributionTagTemplate(array $data): array
    {
        return $this->operation(
            'attribution/tags/macroTag',
            $data,
            'GET',
            true,
            $this->amazonAttributionHeaders()
        );
    }

    /**
     * Gets attribution tag templates for publisher campaigns without macro support.
     * Replace the returned campaign, ad group and ad identifier placeholders.
     * The operation name follows the official API, despite returning non-macro tags.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-attribution-prod-3p#tag/Attribution-Tags/operation/getPublisherMacroAttributionTag
     * @param array $data Required publisherIds array; optional advertiserIds array.
     * @return array
     * @throws Exception
     */
    public function getPublisherMacroAttributionTag(array $data): array
    {
        return $this->operation(
            'attribution/tags/nonMacroTemplateTag',
            $data,
            'GET',
            true,
            $this->amazonAttributionHeaders()
        );
    }

    /**
     * Gets a synchronous PERFORMANCE or PRODUCTS attribution report.
     * @see https://advertising.amazon.com/API/docs/en-us/amazon-attribution-prod-3p#tag/Reports/operation/getAttributionTagsByCampaign
     * @param array $data Report filters, YYYYMMDD dates, metrics and pagination cursor.
     * @return array
     * @throws Exception
     */
    public function getAttributionTagsByCampaign(array $data): array
    {
        return $this->operation(
            'attribution/report',
            $data,
            'POST',
            true,
            $this->amazonAttributionHeaders()
        );
    }
}
