<?php

namespace App\Common\Enums\Rbac;

use ZnCore\Base\Interfaces\GetLabelsInterface;

class CommonPermissionEnum implements GetLabelsInterface
{

    //const BACKEND_ALL = 'oBackendAll';
    const MAIN_PAGE_VIEW = 'oMainPageView';

    public static function getLabels()
    {
        return [
            //self::BACKEND_ALL => 'Доступ в админ панель',
            self::MAIN_PAGE_VIEW => 'Доступ на главную страницу',
        ];
    }
}