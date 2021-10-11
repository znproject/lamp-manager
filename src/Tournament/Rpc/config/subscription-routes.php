<?php

use App\Tournament\Domain\Enums\Rbac\TournamentSubscriptionPermissionEnum;
use App\Tournament\Rpc\Controllers\SubscriptionController;

return [
    [
        'method_name' => 'tournamentSubscription.all',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentSubscriptionPermissionEnum::ALL,
        'handler_class' => SubscriptionController::class,
        'handler_method' => 'all',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournamentSubscription.oneById',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentSubscriptionPermissionEnum::ONE,
        'handler_class' => SubscriptionController::class,
        'handler_method' => 'oneById',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournamentSubscription.create',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentSubscriptionPermissionEnum::CREATE,
        'handler_class' => SubscriptionController::class,
        'handler_method' => 'add',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournamentSubscription.update',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentSubscriptionPermissionEnum::UPDATE,
        'handler_class' => SubscriptionController::class,
        'handler_method' => 'update',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournamentSubscription.delete',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentSubscriptionPermissionEnum::DELETE,
        'handler_class' => SubscriptionController::class,
        'handler_method' => 'delete',
        'status_id' => 100,
    ],
];