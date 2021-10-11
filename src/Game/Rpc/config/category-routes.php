<?php

use App\Game\Domain\Enums\Rbac\GameCategoryPermissionEnum;
use App\Game\Rpc\Controllers\CategoryController;

return [
    [
        'method_name' => 'gameCategory.all',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GameCategoryPermissionEnum::ALL,
        'handler_class' => CategoryController::class,
        'handler_method' => 'all',
        'status_id' => 100,
    ],
    [
        'method_name' => 'gameCategory.oneById',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GameCategoryPermissionEnum::ONE,
        'handler_class' => CategoryController::class,
        'handler_method' => 'oneById',
        'status_id' => 100,
    ],
    [
        'method_name' => 'gameCategory.create',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GameCategoryPermissionEnum::CREATE,
        'handler_class' => CategoryController::class,
        'handler_method' => 'add',
        'status_id' => 100,
    ],
    [
        'method_name' => 'gameCategory.update',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GameCategoryPermissionEnum::UPDATE,
        'handler_class' => CategoryController::class,
        'handler_method' => 'update',
        'status_id' => 100,
    ],
    [
        'method_name' => 'gameCategory.delete',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => GameCategoryPermissionEnum::DELETE,
        'handler_class' => CategoryController::class,
        'handler_method' => 'delete',
        'status_id' => 100,
    ],
];