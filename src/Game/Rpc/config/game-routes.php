<?php

use App\Game\Domain\Enums\Rbac\GameGamePermissionEnum;
use App\Game\Rpc\Controllers\GameController;

return [
    [
        'method_name' => 'game.all',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GameGamePermissionEnum::ALL,
        'handler_class' => GameController::class,
        'handler_method' => 'all',
        'status_id' => 100,
    ],
    [
        'method_name' => 'game.oneById',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GameGamePermissionEnum::ONE,
        'handler_class' => GameController::class,
        'handler_method' => 'oneById',
        'status_id' => 100,
    ],
    [
        'method_name' => 'game.create',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GameGamePermissionEnum::CREATE,
        'handler_class' => GameController::class,
        'handler_method' => 'add',
        'status_id' => 100,
    ],
    [
        'method_name' => 'game.update',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GameGamePermissionEnum::UPDATE,
        'handler_class' => GameController::class,
        'handler_method' => 'update',
        'status_id' => 100,
    ],
    [
        'method_name' => 'game.delete',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GameGamePermissionEnum::DELETE,
        'handler_class' => GameController::class,
        'handler_method' => 'delete',
        'status_id' => 100,
    ],
];