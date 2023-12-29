<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Create and manage Amazon Posts.
 * Trait Posts
 * Amazon Ads API - Posts
 */
trait PostsRequests
{
    /**
     * API to create a Post.
     * @see https://advertising.amazon.com/API/docs/en-us/posts#tag/Posts/operation/CreatePost
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function CreatePost(array $data): array
    {
        return $this->operation('bp/v2/posts', $data, 'POST');
    }

    /**
     * Submit a Post for review.
     * @see https://advertising.amazon.com/API/docs/en-us/posts#tag/Posts/operation/SubmitPostForReview
     * @param string $postId
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function submitPostForReview(string $postId, array $data): array
    {
        return $this->operation("bp/v2/posts/$postId/submitForReview", $data, 'PUT');
    }

    /**
     * Get information for a Post Profile.
     * @see https://advertising.amazon.com/API/docs/en-us/posts#tag/Posts/operation/GetProfile
     * @param string $profileId
     * @return array
     * @throws Exception
     */
    public function getProfile(string $profileId): array
    {
        return $this->operation("bp/v2/profiles/$profileId");
    }

    /**
     * API to get posts data along with performance metrics for each post.
     * @see https://advertising.amazon.com/API/docs/en-us/posts#tag/Posts/operation/ListPosts
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function listPosts(array $data): array
    {
        return $this->operation('bp/v2/posts/list', $data, 'POST');
    }

    /**
     * Get a post.
     * @see https://advertising.amazon.com/API/docs/en-us/posts#tag/Posts/operation/GetPost
     * @param string $postId
     * @return array
     * @throws Exception
     */
    public function getPost(string $postId): array
    {
        return $this->operation("bp/v2/posts/$postId");
    }

    /**
     * Update a Post's data.
     * @see https://advertising.amazon.com/API/docs/en-us/posts#tag/Posts/operation/UpdatePost
     * @param string $postId
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updatePost(string $postId, array $data): array
    {
        return $this->operation("bp/v2/posts/$postId", $data, 'PUT');
    }

    /**
     * Get information for a list of products.
     * @see https://advertising.amazon.com/API/docs/en-us/posts#tag/Posts/operation/GetPostProducts
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function getPostProducts(?array $data): array
    {
        return $this->operation('bp/v2/products/list', $data);
    }

    /**
     * Get brand level performance metrics from Posts.
     * @see https://advertising.amazon.com/API/docs/en-us/posts#tag/Posts/operation/GetProfileMetrics
     * @param string $profileId
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getProfileMetrics(string $profileId, array $data): array
    {
        return $this->operation("bp/v2/profiles/$profileId/metrics", $data, 'POST');
    }

    /**
     * Get a URL to download a metrics report for the Post Profile.
     * @see https://advertising.amazon.com/API/docs/en-us/posts#tag/Posts/operation/GetReportDownloadLink
     * @param string $profileId
     * @return array
     * @throws Exception
     */
    public function getReportDownloadLink(string $profileId): array
    {
        return $this->operation("bp/v2/profiles/$profileId/metrics/download");
    }

    /**
     * Get a list of Post Profiles that the advertiser has access to.
     * @see https://advertising.amazon.com/API/docs/en-us/posts#tag/Posts/operation/ListProfiles
     * @param string $profileId
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listPostsProfiles(string $profileId, ?array $data): array
    {
        return $this->operation("bp/v2/profiles/$profileId/metrics/download", $data);
    }
}
