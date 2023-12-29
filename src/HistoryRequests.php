<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait History of entity changes.
 * Amazon Ads API - History
 */
trait HistoryRequests
{
    /**
     * Returns history of changes for provided event sources that match the filters and time ranges specified. Only events that belong to the authenticated Advertiser can be queried.
     * @see https://advertising.amazon.com/API/docs/en-us/change-history#operation/getHistory
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function getHistory(array $data): array
    {
        return $this->operation('history', $data, 'POST');
    }

}
