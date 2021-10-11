<?php

use ZnLib\Web\Symfony4\Subscribers\TokenSubscriber;
use ZnCore\Base\Libs\App\Factories\ApplicationFactory;
use ZnCore\Base\Libs\App\Factories\KernelFactory;
use ZnSandbox\Sandbox\Error\Symfony4\Web\Controllers\ErrorController;

require __DIR__ . '/../../vendor/autoload.php';

$bundles = include __DIR__ . '/../../config/bundle.php';
$kernel = KernelFactory::createWebKernel($bundles, ['i18next', 'container', 'symfonyAdmin']);
$application = ApplicationFactory::createWeb($kernel);
$application->setLayout(__DIR__ . '/../../vendor/znsymfony/admin-panel/src/Symfony4/Admin/views/layouts/admin/main.php');
$application->addLayoutParam('menuConfigFile', __DIR__ . '/../../config/menu/admin_sidebar.php');
$application->setErrorController(ErrorController::class);
$application->addSubscriber(TokenSubscriber::class);
$response = $application->run();
$response->send();
