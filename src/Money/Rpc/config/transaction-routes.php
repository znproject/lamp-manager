<?php

use App\Money\Domain\Enums\Rbac\MoneyTransactionPermissionEnum;
use App\Money\Rpc\Controllers\TransactionController;

return [
    [
        'method_name' => 'moneyTransaction.all',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => MoneyTransactionPermissionEnum::ALL,
        'handler_class' => TransactionController::class,
        'handler_method' => 'all',
        'status_id' => 100,
    ],
    [
        'method_name' => 'moneyTransaction.oneById',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => MoneyTransactionPermissionEnum::ONE,
        'handler_class' => TransactionController::class,
        'handler_method' => 'oneById',
        'status_id' => 100,
    ],
    /*[
        'method_name' => 'moneyTransaction.create',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => MoneyTransactionPermissionEnum::CREATE,
        'handler_class' => TransactionController::class,
        'handler_method' => 'add',
        'status_id' => 100,
    ],
    [
        'method_name' => 'moneyTransaction.update',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => MoneyTransactionPermissionEnum::UPDATE,
        'handler_class' => TransactionController::class,
        'handler_method' => 'update',
        'status_id' => 100,
    ],
    [
        'method_name' => 'moneyTransaction.delete',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => MoneyTransactionPermissionEnum::DELETE,
        'handler_class' => TransactionController::class,
        'handler_method' => 'delete',
        'status_id' => 100,
    ],*/
];