<?php

namespace App\Money\Domain\Enums;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class TransactionTypeEnum implements GetLabelsInterface
{

    const EMIT = 100;
    const TRANSACTION = 200;
    const WITHDRAWAL = 300;

    public static function getLabels()
    {
        return [
            self::EMIT => 'Тип операции. ',
            self::TRANSACTION => 'Тип операции. ',
            self::WITHDRAWAL => 'Тип операции. ',
        ];
    }
}