<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait ProfileRequests
 * Amazon user-related requests
 */
trait ProfileRequests
{

    /**
     * Get amazon user data (user_id,email)
     * @see https://developer.amazon.com/docs/login-with-amazon/obtain-customer-profile.html
     * @return array
     */
    public function getUserProfile(): array
    {
        $this->endpoint = 'https://api.amazon.com';
        return $this->operation("user/profile");
    }

    /**
     * @return array
     * @throws Exception
     */
    public function listProfiles()
    {
        return $this->operation("profiles");
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function registerProfile(array $data)
    {
        return $this->operation("profiles/register", $data, "PUT");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/reference/2/profiles#/Profiles/registerSandboxVendor
     * @param $data
     * @return array
     * @throws Exception
     */
    public function registerBrand(array $data)
    {
        return $this->operation("profiles/registerBrand", $data, "PUT");
    }

    /**
     * @param $profileId
     * @return array
     * @throws Exception
     */
    public function registerProfileStatus($profileId)
    {
        return $this->operation("profiles/register/{$profileId}/status");
    }

    /**
     * @param $profileId
     * @return array
     * @throws Exception
     */
    public function getProfile($profileId)
    {
        return $this->operation("profiles/{$profileId}");
    }

    /**
     * @param $data
     * @return array
     * @throws Exception
     */
    public function updateProfiles($data)
    {
        return $this->operation("profiles", $data, "PUT");
    }
}
