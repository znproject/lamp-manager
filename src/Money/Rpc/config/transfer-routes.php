<?php

use App\Money\Domain\Enums\Rbac\MoneyIssuePermissionEnum;
use App\Money\Domain\Enums\Rbac\MoneyTransferPermissionEnum;
use App\Money\Rpc\Controllers\TransferController;

return [
    [
        'method_name' => 'moneyTransfer.transfer',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => MoneyTransferPermissionEnum::TRANSFER,
        'handler_class' => TransferController::class,
        'handler_method' => 'transfer',
        'status_id' => 100,
    ],
    [
        'method_name' => 'moneyTransfer.issue',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => MoneyIssuePermissionEnum::ISSUE,
        'handler_class' => TransferController::class,
        'handler_method' => 'issue',
        'status_id' => 100,
    ],
];