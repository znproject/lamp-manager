<?php

namespace App\Money\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class MoneyRoleEnum implements GetLabelsInterface
{

    const MONEY_ISSUER = 'rMoneyIssuer';

    public static function getLabels()
    {
        return [
            self::MONEY_ISSUER => 'Эмитент денежных средств',
        ];
    }
}