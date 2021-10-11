<?php

use ZnBundle\User\Symfony4\Web\Subscribers\WebAuthSubscriber;
use ZnLib\Rest\Helpers\CorsHelper;
use ZnLib\Web\Symfony4\Subscribers\TokenSubscriber;
use ZnCore\Base\Libs\App\Factories\ApplicationFactory;
use ZnCore\Base\Libs\App\Factories\KernelFactory;
use ZnSandbox\Sandbox\Error\Symfony4\Web\Controllers\ErrorController;

require __DIR__ . '/../vendor/autoload.php';

CorsHelper::autoload();

$bundles = include __DIR__ . '/../config/bundle.php';
$kernel = KernelFactory::createWebKernel($bundles, ['i18next', 'container', 'symfonyWeb', 'symfonyRpc']);
$application = ApplicationFactory::createWeb($kernel);
$application->setLayout(__DIR__ . '/../src/Common/views/layouts/website/main.php');
$application->setErrorController(ErrorController::class);
$application->addSubscriber(WebAuthSubscriber::class);
$application->addSubscriber(TokenSubscriber::class);
$response = $application->run();
$response->send();
