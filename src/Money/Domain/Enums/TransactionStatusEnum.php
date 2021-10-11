<?php

namespace App\Money\Domain\Enums;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class TransactionStatusEnum implements GetLabelsInterface
{

    // удален
    const DELETED = -10;

    // отключен
    const DISABLED = 0;

    // отвергнут / отклонен
    const REJECTED = 10;

    // заблокирован
    const BLOCKED = 20;

    // ожидает одобрения / премодерация
    const WAIT_APPROVING = 90;

    // включен / одобрен
    const ENABLED = 100;

    // обработано / завершено
    const COMPLETED = 200;
    
    public static function getLabels()
    {
        return [
            self::DELETED => 'Статус операции. Удален',
            self::DISABLED => 'Статус операции. Отключен',
            self::REJECTED => 'Статус операции. Отклонен',
            self::BLOCKED => 'Статус операции. Заблокирован',
            self::WAIT_APPROVING => 'Статус операции. Ожидает одобрения',
            self::ENABLED => 'Статус операции. Активен',
            self::COMPLETED => 'Статус операции. Завершено',
        ];
    }
}