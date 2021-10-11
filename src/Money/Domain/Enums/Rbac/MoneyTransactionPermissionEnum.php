<?php

namespace App\Money\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class MoneyTransactionPermissionEnum implements GetLabelsInterface
{

    const ALL = 'oMoneyTransactionAll';
    const ONE = 'oMoneyTransactionOne';
//    const CREATE = 'oMoneyTransactionCreate';
//    const UPDATE = 'oMoneyTransactionUpdate';
//    const DELETE = 'oMoneyTransactionDelete';
//    const RESTORE = 'oMoneyTransactionRestore';

    public static function getLabels()
    {
        return [
            self::ALL => 'История транзакций. Просмотр списка',
            self::ONE => 'История транзакций. Просмотр записи',
//            self::CREATE => 'История транзакций. Создание',
//            self::UPDATE => 'История транзакций. Редактирование',
//            self::DELETE => 'История транзакций. Удаление',
//            self::RESTORE => 'История транзакций. Восстановление',
        ];
    }
}