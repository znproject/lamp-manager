<?php

require __DIR__ . '/../../vendor/autoload.php';

$appBundles = [
    ZnSandbox\Sandbox\RpcClient\Bundle::class,
    new \ZnSandbox\Sandbox\Rpc\Bundle(['all']),
    new \ZnSandbox\Sandbox\Generator\Bundle(['all']),
    new \ZnTool\Package\Bundle(['all']),
];

\ZnTool\Dev\Admin\Facades\DevAppFacade::runApp($appBundles);
