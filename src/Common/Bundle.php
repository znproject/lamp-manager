<?php

namespace App\Common;

use ZnCore\Base\Libs\App\Base\BaseBundle;

class Bundle extends BaseBundle
{

    public function deps(): array
    {
        return [
            new \ZnSandbox\Sandbox\Symfony\Bundle(['all']),
            new \ZnLib\Web\Bundle(['all']),
        ];
    }

    public function symfonyWeb(): array
    {
        return [
            __DIR__ . '/../../config/routing.php',
        ];
    }

    public function container(): array
    {
        return [
            __DIR__ . '/../../config/container.php',
        ];
    }
}
