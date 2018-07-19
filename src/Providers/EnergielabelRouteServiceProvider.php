<?php

namespace Energielabel\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class EnergielabelRouteServiceProvider
 * @package Energielabel\Providers
 */
class EnergielabelRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','Energielabel\Controllers\EnergielabelController@getHelloWorldPage');
    }
}