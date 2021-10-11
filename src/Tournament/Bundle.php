<?php

namespace App\Tournament;

use ZnCore\Base\Libs\App\Base\BaseBundle;

class Bundle extends BaseBundle
{

    public function symfonyRpc(): array
    {
        return [
            __DIR__ . '/Rpc/config/scramble-routes.php',
            __DIR__ . '/Rpc/config/subscription-routes.php',
            __DIR__ . '/Rpc/config/tournament-routes.php',
        ];
    }

    public function migration(): array
    {
        return [
            '/src/Tournament/Domain/Migrations',
        ];
    }

    public function container(): array
    {
        return [
            __DIR__ . '/Domain/config/container.php',
        ];
    }
}
