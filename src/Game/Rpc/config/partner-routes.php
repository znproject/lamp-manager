<?php

use App\Game\Domain\Enums\Rbac\GamePartnerPermissionEnum;
use App\Game\Rpc\Controllers\PartnerController;

return [
    [
        'method_name' => 'gamePartner.all',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GamePartnerPermissionEnum::ALL,
        'handler_class' => PartnerController::class,
        'handler_method' => 'all',
        'status_id' => 100,
    ],
    [
        'method_name' => 'gamePartner.oneById',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GamePartnerPermissionEnum::ONE,
        'handler_class' => PartnerController::class,
        'handler_method' => 'oneById',
        'status_id' => 100,
    ],
    [
        'method_name' => 'gamePartner.create',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GamePartnerPermissionEnum::CREATE,
        'handler_class' => PartnerController::class,
        'handler_method' => 'add',
        'status_id' => 100,
    ],
    [
        'method_name' => 'gamePartner.update',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GamePartnerPermissionEnum::UPDATE,
        'handler_class' => PartnerController::class,
        'handler_method' => 'update',
        'status_id' => 100,
    ],
    [
        'method_name' => 'gamePartner.delete',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GamePartnerPermissionEnum::DELETE,
        'handler_class' => PartnerController::class,
        'handler_method' => 'delete',
        'status_id' => 100,
    ],
];