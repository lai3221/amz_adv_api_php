<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait PortfoliosRequests
 * Amazon Ads API - Portfolios
 */
trait ReportingRequests
{
    /**
     * Only for V2 Reports
     * @param $recordType
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function requestReport($recordType, array $data): array
    {
        return $this->operation("$recordType/report", $data, 'POST');
    }

    /**
     * Only for V2 Reports
     * @param $reportId
     * @return array
     * @throws Exception
     */
    public function getReport($reportId): array
    {
        if ($this->reportsVersion != $this->apiVersion) {
            $type = $this->reportsVersion . '/';
        } else {
            $type = '/';
        }

        $req = $this->operation($type . "reports/$reportId");
        if ($req['success']) {
            $json = json_decode($req['response'], true);
            if ($json['status'] == "SUCCESS") {
                return $this->download($json['location']);
            }
        }
        return $req;
    }

    /**
     * Version 3.0
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function requestOfflineReport(array $data): array
    {
        return $this->operation('reporting/reports', $data, 'POST');
    }

    /**
     * Version 3.0
     * @param $reportId
     * @return array
     * @throws Exception
     */
    public function getOfflineReport($reportId): array
    {
        return $this->operation("reporting/reports/$reportId");
    }

    /**
     * Version 3.0
     * @param $reportId
     * @return array
     * @throws Exception
     */
    public function deleteOfflineReport($reportId): array
    {
        return $this->operation("reporting/reports/$reportId", null, 'DELETE');
    }
}
