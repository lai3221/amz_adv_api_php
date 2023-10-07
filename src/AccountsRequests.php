<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait AccountsRequests
 * Amazon Ads API - Accounts
 */
trait AccountsRequests
{
    /**
     * Gets a list of portfolios.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#tag/Portfolios/operation/listPortfolios
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listPortfolios(array $data): array
    {
        return $this->operation('v2/portfolios', $data);
    }

    /**
     * Retrieves a list of portfolios, optionally filtered by identifier, name, or state.
     * https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#tag/Portfolios/operation/listPortfolio
     * @param int $portfolioId
     * @return array
     * @throws Exception
     */
    public function getPortfolio(int $portfolioId): array
    {
        return $this->operation("v2/portfolios/$portfolioId");
    }

    /**
     * Gets a list of portfolios with an extended set of properties.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#tag/Portfolios-extended/operation/listPortfoliosEx
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listPortfoliosEx(array $data): array
    {
        return $this->operation('v2/portfolios/extended', $data);
    }

    /**
     * Gets an extended set of properties for a portfolio specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#tag/Portfolios-extended/operation/listPortfoliosEx
     * @param int $portfolioId
     * @return array
     * @throws Exception
     */
    public function getPortfolioEx(int $portfolioId): array
    {
        return $this->operation("v2/portfolios/extended/$portfolioId");
    }

    /**
     * Creates one or more portfolios.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#tag/Portfolios/operation/createPortfolios
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createPortfolios(array $data): array
    {
        return $this->operation('v2/portfolios', $data, 'POST');
    }

    /**
     * Updates one or more portfolios.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#tag/Portfolios/operation/updatePortfolios
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updatePortfolios(array $data): array
    {
        return $this->operation('v2/portfolios', $data, 'PUT');
    }

    /**
     * Gets a list of profiles.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/2/profiles#tag/Profiles/operation/listProfiles
     * @return array
     * @throws Exception
     */
    public function listProfiles(): array
    {
        return $this->operation('v2/profiles');
    }

    /**
     * Gets a profile specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/2/profiles#tag/Profiles/operation/getProfileById
     * @param $profileId
     * @return array
     * @throws Exception
     */
    public function getProfileById($profileId): array
    {
        return $this->operation("v2/profiles/$profileId");
    }

    /**
     * Update the daily budget for one or more profiles.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/2/profiles#tag/Profiles/operation/updateProfiles
     * @param $data
     * @return array
     * @throws Exception
     */
    public function updateProfiles($data): array
    {
        return $this->operation('v2/profiles', $data, 'PUT');
    }


    /**
     * Budget usage API for portfolios
     * @see https://advertising.amazon.com/API/docs/en-us/reference/portfolios#tag/Budget-Usage/operation/portfolioBudgetUsage
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function portfolioBudgetUsage(array $data): array
    {
        return $this->operation('portfolios/budget/usage', $data, 'POST');
    }

    /**
     * Get the billing status for a list of advertising accounts.
     * @see https://advertising.amazon.com/API/docs/en-us/invoices#tag/Billing-Status/operation/bulkGetBillingStatus
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function bulkGetBillingStatus(array $data): array
    {
        return $this->operation('billing/statuses', $data, 'POST');
    }

    /**
     * Get invoices for advertiser
     * @see https://advertising.amazon.com/API/docs/en-us/invoices#tag/invoice/operation/getAdvertiserInvoices
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getAdvertiserInvoices(?array $data): array
    {
        return $this->operation('invoices', $data);
    }

    /**
     * Get invoice data by invoice ID
     * @see https://advertising.amazon.com/API/docs/en-us/invoices#tag/invoice/operation/getInvoice
     * @param $invoiceId
     * @return array
     * @throws Exception
     */
    public function getInvoice($invoiceId): array
    {
        return $this->operation("invoices/$invoiceId");
    }

    /**
     * Get the billing notifications for a list advertising accounts.
     * @see https://advertising.amazon.com/API/docs/en-us/invoices#tag/Billing-Notifications/operation/bulkGetBillingNotifications
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function bulkGetBillingNotifications(array $data): array
    {
        return $this->operation('billing/notifications', $data, 'POST');
    }

    /**
     * Creates or Updates account budget feature flags information.
     * @see https://advertising.amazon.com/API/docs/en-us/invoices#tag/Advertiser/operation/updateAccountBudgetFeatureFlags
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateAccountBudgetFeatureFlags(array $data): array
    {
        return $this->operation('accountBudgets/featureFlags', $data, 'POST');
    }

    /**
     * Gets account budget feature flags information.
     * @see https://advertising.amazon.com/API/docs/en-us/invoices#tag/Advertiser/operation/getAccountBudgetFeatureFlags
     * @return array
     * @throws Exception
     */
    public function getAccountBudgetFeatureFlags(): array
    {
        return $this->operation('accountBudgets/featureFlags');
    }

    /**
     * Link Amazon Advertising accounts or advertisers with a Manager Account.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/1-0/managerAccount#tag/Manager-Accounts/operation/LinkAdvertisingAccountsToManagerAccountPublicAPI
     * @param string $managerAccountId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function linkAdvertisingAccountsToManagerAccountPublicAPI(string $managerAccountId, ?array $data): array
    {
        return $this->operation("managerAccounts/$managerAccountId/associate", $data, 'POST');
    }

    /**
     * Unlink Amazon Advertising accounts or advertisers with a Manager Account.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/1-0/managerAccount#tag/Manager-Accounts/operation/UnlinkAdvertisingAccountsToManagerAccountPublicAPI
     * @param string $managerAccountId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function unlinkAdvertisingAccountsToManagerAccountPublicAPI(string $managerAccountId, ?array $data): array
    {
        return $this->operation("managerAccounts/$managerAccountId/disassociate", $data, 'POST');
    }

    /**
     * Creates a new Amazon Advertising Manager account.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/1-0/managerAccount#tag/Manager-Accounts/operation/createManagerAccount
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createManagerAccount(array $data): array
    {
        return $this->operation('managerAccounts', $data, 'POST');
    }

    /**
     * Returns all manager accounts that a given Amazon Ads user has access to.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/1-0/managerAccount#tag/Manager-Accounts/operation/getManagerAccountsForUser
     * @return array
     * @throws Exception
     */
    public function getManagerAccountsForUser(): array
    {
        return $this->operation('managerAccounts');
    }

    /**
     * API to create test accounts
     * Submit an account creation request. You can create up to 1 test account type per marketplace.
     * @see https://advertising.amazon.com/API/docs/en-us/test-accounts/openapi#tag/Create-test-account
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createTestAccount(array $data): array
    {
        return $this->operation('testAccounts', $data, 'POST');
    }

    /**
     * GetAccountInformation
     * @see https://advertising.amazon.com/API/docs/en-us/test-accounts/openapi#tag/Get-test-account-information/operation/GetAccountInformation
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getAccountInformation(array $data): array
    {
        return $this->operation('testAccounts', $data);
    }
}
