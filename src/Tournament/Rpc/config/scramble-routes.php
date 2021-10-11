<?php

use App\Tournament\Domain\Enums\Rbac\TournamentScramblePermissionEnum;
use App\Tournament\Rpc\Controllers\ScrambleController;

return [
    [
        'method_name' => 'tournamentScramble.all',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentScramblePermissionEnum::ALL,
        'handler_class' => ScrambleController::class,
        'handler_method' => 'all',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournamentScramble.oneById',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentScramblePermissionEnum::ONE,
        'handler_class' => ScrambleController::class,
        'handler_method' => 'oneById',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournamentScramble.create',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentScramblePermissionEnum::CREATE,
        'handler_class' => ScrambleController::class,
        'handler_method' => 'add',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournamentScramble.update',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentScramblePermissionEnum::UPDATE,
        'handler_class' => ScrambleController::class,
        'handler_method' => 'update',
        'status_id' => 100,
    ],
    [
        'method_name' => 'tournamentScramble.delete',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => TournamentScramblePermissionEnum::DELETE,
        'handler_class' => ScrambleController::class,
        'handler_method' => 'delete',
        'status_id' => 100,
    ],
];