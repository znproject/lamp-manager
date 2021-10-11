<?php

namespace App\Money\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class MoneyTransferPermissionEnum implements GetLabelsInterface
{

    const TRANSFER = 'oMoneyTransferTransfer';

    public static function getLabels()
    {
        return [
            self::TRANSFER => 'Перевод средств на кошелек',
        ];
    }
}