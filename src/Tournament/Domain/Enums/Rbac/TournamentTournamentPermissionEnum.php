<?php

namespace App\Tournament\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class TournamentTournamentPermissionEnum implements GetLabelsInterface
{

    const ALL = 'oTournamentTournamentAll';
    const ONE = 'oTournamentTournamentOne';
    const CREATE = 'oTournamentTournamentCreate';
    const UPDATE = 'oTournamentTournamentUpdate';
    const DELETE = 'oTournamentTournamentDelete';
    const RESTORE = 'oTournamentTournamentRestore';

    public static function getLabels()
    {
        return [
            self::ALL => 'Турнир. Просмотр списка',
            self::ONE => 'Турнир. Просмотр записи',
            self::CREATE => 'Турнир. Создание',
            self::UPDATE => 'Турнир. Редактирование',
            self::DELETE => 'Турнир. Удаление',
            self::RESTORE => 'Турнир. Восстановление',
        ];
    }
}