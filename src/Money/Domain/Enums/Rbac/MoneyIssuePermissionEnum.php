<?php

namespace App\Money\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class MoneyIssuePermissionEnum implements GetLabelsInterface
{

    const ISSUE = 'oMoneyIssueIssue';

    public static function getLabels()
    {
        return [
            self::ISSUE => 'Эмиссия средств',
        ];
    }
}