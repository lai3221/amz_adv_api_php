<?php

namespace AmazonAdvertisingApi;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class AmazonAdvServiceProvider
 * @package AmazonAdvertisingApi
 * @author Misolai <lai3221@163.com>
 * @date Date 2022/2/24   15:21
 */
class AmazonAdvServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/config/amazon_adv_api.php';
        $this->mergeConfigFrom($configPath, 'amazon_adv_api');
    }

    public function boot()
    {
        $configPath = __DIR__ . '/config/amazon_adv_api.php';
        $this->publishes([$configPath => config_path('amazon_adv_api.php')], 'config');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return [];
    }
}
