<?php

namespace App\Money;

use ZnCore\Base\Libs\App\Base\BaseBundle;

class Bundle extends BaseBundle
{

    public function symfonyRpc(): array
    {
        return [
            __DIR__ . '/Rpc/config/transaction-routes.php',
            __DIR__ . '/Rpc/config/transfer-routes.php',
            __DIR__ . '/Rpc/config/wallet-routes.php',
        ];
    }

    public function migration(): array
    {
        return [
            '/src/Money/Domain/Migrations',
        ];
    }

    public function container(): array
    {
        return [
            __DIR__ . '/Domain/config/container.php',
        ];
    }
}
