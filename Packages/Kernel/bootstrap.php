<?php

use Illuminate\Container\Container;
use Symfony\Component\HttpFoundation\Request;
use ZnCore\Base\Helpers\EnvHelper;
use ZnCore\Base\Libs\App\Kernel;
use ZnCore\Base\Libs\App\Loaders\ContainerConfigLoader;
use ZnCore\Base\Libs\App\Loaders\RoutingConfigLoader;
use ZnCore\Base\Libs\DotEnv\DotEnv;
use ZnLib\Web\Symfony4\MicroApp\MicroApp;

DotEnv::init(__DIR__ . '/../..');
EnvHelper::setErrorVisibleFromEnv();

$container = Container::getInstance();
$kernel = new Kernel('web');
$kernel->setContainer($container);
$kernel->setLoader(new ContainerConfigLoader([
//    __DIR__ . '/../../config/extra/importContainer.php',
    __DIR__ . '/../../vendor/znsandbox/sandbox/src/Apache/Domain/config/container.php',
]));
$kernel->setLoader(new RoutingConfigLoader([
    __DIR__ . '/../../vendor/znsandbox/sandbox/src/Apache/Symfony4/Web/config/routing.php',
]));
$mainConfig = $kernel->loadAppConfig();

$app = new MicroApp($container, $mainConfig['routeCollection']);
$request = Request::createFromGlobals();
$response = $app->run($request);
$response->send();
