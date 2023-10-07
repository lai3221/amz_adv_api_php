<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait ReportingRequests
 * Amazon Ads API - Reporting
 */
trait ReportingRequests
{
    /**
     * DEPRECATED
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
     * Requests the creation of a report containing performance data related to Sponsored Brands campaigns.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Reports/paths/~1v2~1hsa~1%7BrecordType%7D~1report/post
     * @param $recordType
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function requestSponsoredBrandsReportV2($recordType, array $data): array
    {
        return $this->operation("v2/hsa/$recordType/report", $data, 'POST');
    }

    /**
     * Only for V2 Reports
     * Requests the creation of a report containing performance data related to Sponsored Brands campaigns.
     * @see hhttps://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#tag/Reports/operation/requestReport
     * @param $recordType
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function requestSponsoredDisplayReportV2($recordType, array $data): array
    {
        return $this->operation("sd/$recordType/report", $data, 'POST');
    }

    /**
     * Returns the status of a previously requested report.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Reports/paths/~1v2~1reports~1%7BreportId%7D/get
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#tag/Reports/operation/getReportStatus
     * @param $reportId
     * @return array
     * @throws Exception
     */
    public function checkReportStatusV2($reportId): array
    {
          return $this->operation("v2/reports/$reportId");
    }

    /**
     * Downloads a previously requested report identified by reportId.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#tag/Reports/operation/downloadReport
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#tag/Reports/operation/downloadReport
     * @param $reportId
     * @return array
     * @throws Exception
     */
    public function downloadReportV2($reportId): array
    {
        return $this->operation("v2/reports/$reportId/download");
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
     * Requesting reports
     * @see https://advertising.amazon.com/API/docs/en-us/offline-report-prod-3p#tag/Asynchronous-Reports/operation/createAsyncReport
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
     * Checking report status
     * @see https://advertising.amazon.com/API/docs/en-us/offline-report-prod-3p#tag/Asynchronous-Reports/operation/getAsyncReport
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
     * Deletes a report by id
     * @see https://advertising.amazon.com/API/docs/en-us/offline-report-prod-3p#tag/Asynchronous-Reports/operation/deleteAsyncReport
     * @param $reportId
     * @return array
     * @throws Exception
     */
    public function deleteOfflineReport($reportId): array
    {
        return $this->operation("reporting/reports/$reportId", null, 'DELETE');
    }

    /**
     * Version 3.0
     * Download the AWS S3 report.
     * @param $location
     * @param bool $gunzip
     * @return array
     */
    public function download($location, bool $gunzip = false): array
    {
        $request = new CurlRequest($this->config);
        $request->setOption(CURLOPT_URL, $location);
        if ($this->config['saveFile'] && $gunzip) {
            return $this->saveDownloaded($request);
        }
        if ($gunzip) {
            $response = $this->executeRequest($request);
            $response['response'] = gzdecode($response['response']);
            return $response;
        }
        return $this->executeRequest($request);
    }

    /**
     * Save *.json.gz file, extract it, remove .gz file
     * and set into response path to json file
     * @param CurlRequest $request
     * @return array
     */
    protected function saveDownloaded(CurlRequest $request): array
    {
        $filePath = uniqid(microtime(true) . '_amzn_ads_') . '.json.gz';
        $tmpFile = fopen($filePath, 'w+');
        $request->setOption(CURLOPT_HEADER, 0);
        $request->setOption(CURLOPT_FOLLOWLOCATION, 1);
        $request->setOption(CURLOPT_FILE, $tmpFile);
        $response = $this->executeRequest($request);
        if ($response['success']) {
            $extractedFile = $this->extractFile($filePath);
            fclose($tmpFile);
            $response['response_type'] = 'file';
            $response['response'] = $extractedFile;
        } else {
            fclose($tmpFile);
            unlink($filePath);
        }
        return $response;
    }

    /**
     * Extract gz file.
     * @param string $filePath
     * @return string
     */
    protected function extractFile(string $filePath): string
    {
        $bufferSize = 4096; // read 4kb at a time
        $unzipFilePath = str_replace('.gz', '', $filePath);
        $file = gzopen($filePath, 'rb');
        $unzippedFile = fopen($unzipFilePath, 'wb');
        while (!gzeof($file)) {
            fwrite($unzippedFile, gzread($file, $bufferSize));
        }
        fclose($unzippedFile);
        gzclose($file);
        return $unzipFilePath;
    }
}
