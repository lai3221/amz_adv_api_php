<?php

namespace AmazonAdvertisingApi;

/**
 * Class CurlRequest
 * Executes requests to Amazon Ads API
 */
class CurlRequest
{
    private $handle;
    public $requestId = null;

    public function __construct($config)
    {
        $this->reset($config);
    }

    public function reset($config)
    {
        $this->handle = curl_init();
        curl_setopt($this->handle, CURLOPT_PORT, 443);
        curl_setopt($this->handle, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($this->handle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($this->handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->handle, CURLOPT_HEADER, false);
        if ($config['isUseProxy'] && $config['curlProxy'] && $config['curlProxyType']) {
            switch ($config['curlProxyType']) {
                default:
                case 'http':
                    $curlType = CURLPROXY_HTTP;
                    break;
                case 'https'://Added in 7.52.0 for OpenSSL, GnuTLS and NSS
                    $curlType = CURLPROXY_HTTPS;
                    break;
                case 'http_1_0': // This is similar to CURLPROXY_HTTP except it uses HTTP/1.0 for any CONNECT tunnelling.
                    // It does not change the HTTP version of the actual HTTP requests, controlled by CURLOPT_HTTP_VERSION.
                    $curlType = CURLPROXY_HTTP_1_0;
                    break;
                case 'socks4':
                    $curlType = CURLPROXY_SOCKS4;
                    break;
                case 'socks4a'://Proxy resolves URL hostname.
                    $curlType = CURLPROXY_SOCKS4A;
                    break;
                case 'socks5':
                    $curlType = CURLPROXY_SOCKS5;
                    break;
                case 'socks_hostname'://Proxy resolves URL hostname.
                    $curlType = CURLPROXY_SOCKS5_HOSTNAME;
                    break;
            }
            curl_setopt($this->handle, CURLOPT_PROXYTYPE, $curlType);
            curl_setopt($this->handle, CURLOPT_PROXY, $config['curlProxy']);
        }
        if (defined("CURLOPT_IPRESOLVE")) {
            curl_setopt($this->handle, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        }
        curl_setopt($this->handle, CURLOPT_HEADERFUNCTION, array($this, "handleHeaderLine"));
    }

    public function setOption($name, $value)
    {
        curl_setopt($this->handle, $name, $value);
    }

    public function execute()
    {
        return curl_exec($this->handle);
    }

    public function getInfo()
    {
        return curl_getinfo($this->handle);
    }

    public function getError(): string
    {
        return curl_error($this->handle);
    }

    public function close()
    {
        curl_close($this->handle);
    }

    private function handleHeaderLine($ch, $line): int
    {
        $matches = array();
        if (preg_match("/x-amz-request-id:\ \S+/", $line)) {
            preg_match_all("/[^\ ]\S+/", $line, $matches);
            if (count($matches) > 0) {
                if (count($matches[0]) > 1) {
                    $this->requestId = $matches[0][1];
                }
            }
        }
        return strlen($line);
    }
}
