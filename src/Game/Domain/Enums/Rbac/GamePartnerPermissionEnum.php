<?php

namespace App\Game\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class GamePartnerPermissionEnum implements GetLabelsInterface
{

    const ALL = 'oGamePartnerAll';
    const ONE = 'oGamePartnerOne';
    const CREATE = 'oGamePartnerCreate';
    const UPDATE = 'oGamePartnerUpdate';
    const DELETE = 'oGamePartnerDelete';
    const RESTORE = 'oGamePartnerRestore';

    public static function getLabels()
    {
        return [
            self::ALL => 'Партнер игры. Просмотр списка',
            self::ONE => 'Партнер игры. Просмотр записи',
            self::CREATE => 'Партнер игры. Создание',
            self::UPDATE => 'Партнер игры. Редактирование',
            self::DELETE => 'Партнер игры. Удаление',
            self::RESTORE => 'Партнер игры. Восстановление',
        ];
    }
}