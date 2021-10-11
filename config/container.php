<?php

use ZnSandbox\Sandbox\Rpc\Symfony4\Web\Libs\CryptoProviderInterface;
use ZnSandbox\Sandbox\Rpc\Symfony4\Web\Libs\JsonDSigCryptoProvider;
use ZnBundle\Dashboard\Domain\Interfaces\Services\DashboardServiceInterface;
use ZnBundle\Dashboard\Domain\Services\DashboardService;
use Psr\Container\ContainerInterface;
use ZnCrypt\Pki\Domain\Helpers\RsaKeyLoaderHelper;
use ZnLib\Web\Widgets\BreadcrumbWidget;
use ZnUser\Rbac\Domain\Enums\Rbac\SystemRoleEnum;
use ZnUser\Rbac\Domain\Interfaces\Services\ManagerServiceInterface;
use ZnUser\Rbac\Domain\Services\ManagerService;

return [
    'definitions' => [],
    'singletons' => [
        BreadcrumbWidget::class => function () {
            return new BreadcrumbWidget([
                [
                    'label' => '<i class="fa fa-home"></i>',
                    'url' => '/',
                ],
            ]);
        },
        ManagerServiceInterface::class => function(ContainerInterface $container) {
            /** @var ManagerService $managerService */
            $managerService = $container->make(ManagerService::class);
            $managerService->setDefaultRoles([SystemRoleEnum::GUEST]);
            return $managerService;
        },
        DashboardServiceInterface::class => function (ContainerInterface $container) {
            /** @var DashboardService $service */
            $service = $container->get(DashboardService::class);
            $config = include __DIR__ . '/../config/dashboard.php';
            $service->setConfig($config);
            return $service;
        },
        CryptoProviderInterface::class => function () {
            $keyCaStore = RsaKeyLoaderHelper::loadKeyStoreFromDirectory(__DIR__ . '/rsa/rootCa');
            $keyStoreUser = RsaKeyLoaderHelper::loadKeyStoreFromDirectory(__DIR__ . '/rsa/user');
            return new JsonDSigCryptoProvider($keyStoreUser, $keyCaStore);
        },
    ],
];
