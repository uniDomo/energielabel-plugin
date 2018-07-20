<?php

namespace Energielabel\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class EnergielabelServiceProvider
 * @package Energielabel\Providers
 */
class EnergielabelServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(EnergielabelRouteServiceProvider::class);
    }
}