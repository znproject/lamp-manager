<?php

namespace App\Game\Domain\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class GameCategoryPermissionEnum implements GetLabelsInterface
{

    const ALL = 'oGameCategoryAll';
    const ONE = 'oGameCategoryOne';
    const CREATE = 'oGameCategoryCreate';
    const UPDATE = 'oGameCategoryUpdate';
    const DELETE = 'oGameCategoryDelete';
    const RESTORE = 'oGameCategoryRestore';

    public static function getLabels()
    {
        return [
            self::ALL => 'Категория игры. Просмотр списка',
            self::ONE => 'Категория игры. Просмотр записи',
            self::CREATE => 'Категория игры. Создание',
            self::UPDATE => 'Категория игры. Редактирование',
            self::DELETE => 'Категория игры. Удаление',
            self::RESTORE => 'Категория игры. Восстановление',
        ];
    }
}