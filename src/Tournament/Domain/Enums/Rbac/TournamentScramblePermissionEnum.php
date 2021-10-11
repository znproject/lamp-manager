<?php

namespace App\Tournament\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class TournamentScramblePermissionEnum implements GetLabelsInterface
{

    const ALL = 'oTournamentScrambleAll';
    const ONE = 'oTournamentScrambleOne';
    const CREATE = 'oTournamentScrambleCreate';
    const UPDATE = 'oTournamentScrambleUpdate';
    const DELETE = 'oTournamentScrambleDelete';
    const RESTORE = 'oTournamentScrambleRestore';

    public static function getLabels()
    {
        return [
            self::ALL => 'Схватка. Просмотр списка',
            self::ONE => 'Схватка. Просмотр записи',
            self::CREATE => 'Схватка. Создание',
            self::UPDATE => 'Схватка. Редактирование',
            self::DELETE => 'Схватка. Удаление',
            self::RESTORE => 'Схватка. Восстановление',
        ];
    }
}