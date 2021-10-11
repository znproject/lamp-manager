<?php

namespace App\Game;

use ZnCore\Base\Libs\App\Base\BaseBundle;

class Bundle extends BaseBundle
{

    public function symfonyRpc(): array
    {
        return [
            __DIR__ . '/Rpc/config/category-routes.php',
            __DIR__ . '/Rpc/config/game-routes.php',
            __DIR__ . '/Rpc/config/partner-routes.php',
        ];
    }

    public function migration(): array
    {
        return [
            '/src/Game/Domain/Migrations',
        ];
    }

    public function container(): array
    {
        return [
            __DIR__ . '/Domain/config/container.php',
        ];
    }
}
