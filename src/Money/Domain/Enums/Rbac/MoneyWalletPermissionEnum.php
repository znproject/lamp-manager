<?php

namespace App\Money\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class MoneyWalletPermissionEnum implements GetLabelsInterface
{

    const All = 'oMoneyWalletAll';

    public static function getLabels()
    {
        return [
            self::All => 'Просмотр баланса на кошельках',
        ];
    }
}