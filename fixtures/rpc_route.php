<?php

use ZnCore\Base\Legacy\Yii\Helpers\ArrayHelper;

$collection = [
    /*[
        'method_name' => 'fixture.import',
        'version' => '1',
        'is_verify_eds' => false,
        'is_verify_auth' => false,
        'permission_name' => 'oFixtureImport',
        'handler_class' => 'ZnLib\Rpc\Rpc\Controllers\FixtureController',
        'handler_method' => 'import',
        'status_id' => 100,
    ],*/
];

foreach ($_ENV['RPC_ROUTES'] as $file) {
    $collection = ArrayHelper::merge($collection, include $file);
}

//$collection = ArrayHelper::merge($collection, include __DIR__ . '/../vendor/znlib/rpc/src/Rpc/config/routes.php');
//$collection = ArrayHelper::merge($collection, include __DIR__ . '/../vendor/znsandbox/sandbox/src/Casbin/Rpc/config/routes.php');
//$collection = ArrayHelper::merge($collection, include __DIR__ . '/../vendor/znsandbox/sandbox/src/Application/Rpc/config/routes.php');
//$collection = ArrayHelper::merge($collection, include __DIR__ . '/../src/User/Rpc/config/routes.php');
//$collection = ArrayHelper::merge($collection, include __DIR__ . '/../src/Rpc/Rpc/config/routes.php');

return [
	'deps' => [
        'rbac_item',
    ],
	'collection' => $collection,
];
