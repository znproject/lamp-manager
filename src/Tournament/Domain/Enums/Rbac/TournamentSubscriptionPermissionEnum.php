<?php

namespace App\Tournament\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class TournamentSubscriptionPermissionEnum implements GetLabelsInterface
{

    const ALL = 'oTournamentSubscriptionAll';
    const ONE = 'oTournamentSubscriptionOne';
    const CREATE = 'oTournamentSubscriptionCreate';
    const UPDATE = 'oTournamentSubscriptionUpdate';
    const DELETE = 'oTournamentSubscriptionDelete';
    const RESTORE = 'oTournamentSubscriptionRestore';

    public static function getLabels()
    {
        return [
            self::ALL => 'Подписка на уведомление о старте турнира. Просмотр списка',
            self::ONE => 'Подписка на уведомление о старте турнира. Просмотр записи',
            self::CREATE => 'Подписка на уведомление о старте турнира. Создание',
            self::UPDATE => 'Подписка на уведомление о старте турнира. Редактирование',
            self::DELETE => 'Подписка на уведомление о старте турнира. Удаление',
            self::RESTORE => 'Подписка на уведомление о старте турнира. Восстановление',
        ];
    }
}