<?php

use App\Money\Domain\Enums\Rbac\MoneyWalletPermissionEnum;
use App\Money\Rpc\Controllers\WalletController;

return [
    [
        'method_name' => 'moneyWallet.all',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => true,
        'permission_name' => MoneyWalletPermissionEnum::All,
        'handler_class' => WalletController::class,
        'handler_method' => 'all',
        'status_id' => 100,
    ],
];