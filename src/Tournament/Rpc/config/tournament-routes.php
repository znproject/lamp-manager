<?php

use App\Tournament\Domain\Enums\Rbac\TournamentTournamentPermissionEnum;
use App\Tournament\Rpc\Controllers\TournamentController;

return [
    [
        'method_name' => 'tournament.all',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentTournamentPermissionEnum::ALL,
        'handler_class' => TournamentController::class,
        'handler_method' => 'all',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournament.oneById',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentTournamentPermissionEnum::ONE,
        'handler_class' => TournamentController::class,
        'handler_method' => 'oneById',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournament.create',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentTournamentPermissionEnum::CREATE,
        'handler_class' => TournamentController::class,
        'handler_method' => 'add',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournament.update',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentTournamentPermissionEnum::UPDATE,
        'handler_class' => TournamentController::class,
        'handler_method' => 'update',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournament.delete',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentTournamentPermissionEnum::DELETE,
        'handler_class' => TournamentController::class,
        'handler_method' => 'delete',
        'status_id' => 100,
    ],
];