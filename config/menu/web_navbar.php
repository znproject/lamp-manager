<?php

use ZnCore\Base\Legacy\Yii\Helpers\Url;
use ZnUser\Rbac\Domain\Enums\Rbac\ExtraPermissionEnum;

return [
    [
        'label' => 'json-rpc',
        'url' => Url::to(['/json-rpc']),
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
    [
        'label' => 'admin',
        'url' => Url::to(['/admin']),
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
    [
        'label' => 'dev',
        'url' => Url::to(['/dev']),
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
    [
        'label' => 'RPC client',
        'url' => Url::to(['/rpc-client/request']),
        //'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
];
