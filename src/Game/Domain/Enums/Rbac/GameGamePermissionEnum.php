<?php

namespace App\Game\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class GameGamePermissionEnum implements GetLabelsInterface
{

    const ALL = 'oGameGameAll';
    const ONE = 'oGameGameOne';
    const CREATE = 'oGameGameCreate';
    const UPDATE = 'oGameGameUpdate';
    const DELETE = 'oGameGameDelete';
    const RESTORE = 'oGameGameRestore';

    public static function getLabels()
    {
        return [
            self::ALL => 'Игра. Просмотр списка',
            self::ONE => 'Игра. Просмотр записи',
            self::CREATE => 'Игра. Создание',
            self::UPDATE => 'Игра. Редактирование',
            self::DELETE => 'Игра. Удаление',
            self::RESTORE => 'Игра. Восстановление',
        ];
    }
}