<?php

use ZnCore\Base\Legacy\Yii\Helpers\Url;
use ZnUser\Rbac\Domain\Enums\Rbac\ExtraPermissionEnum;

return [
    [
        'label' => 'eav',
        //'module' => 'rbac',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],

    [
        'label' => 'category',
        'url' => Url::to(['/eav/category']),
        'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
    [
        'label' => 'entity',
        'url' => Url::to(['/eav/entity']),
        'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
    [
        'label' => 'attribute',
        'url' => Url::to(['/eav/attribute']),
        'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],

    [
        'label' => 'Application',
        //'module' => 'rbac',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],

    [
        'label' => 'Application',
        'url' => Url::to(['/application/application']),
        'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],



    [
        'label' => 'Storage',
        //'module' => 'rbac',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
    [
        'label' => 'File',
        'url' => Url::to(['/storage/file']),
        'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
    /*[
        'label' => 'API key',
        'url' => Url::to(['/application/api-key']),
        'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],*/

    [
        'label' => 'Rpc',
        //'module' => 'rbac',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
    [
        'label' => 'Client',
        'url' => Url::to(['/rpc-client/request']),
        'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
];
