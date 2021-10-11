<?php

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use ZnBundle\Dashboard\Symfony4\Web\Controllers\DashboardController;
use ZnSandbox\Sandbox\Apache\Symfony4\Web\Controllers\ServerController;

return function (RoutingConfigurator $routes) {
    /*$routes
        ->add('main_page', '/')
        ->controller([DashboardController::class, 'index']);*/

    $routes
        ->add('main_page', '/')
        ->controller([ServerController::class, 'index']);
};
