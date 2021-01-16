<?php

use Packages\Kernel\Autoloader;

include_once(__DIR__ . '/Autoloader.php');
$rootDir = realpath(__DIR__ . '/../..');
$autoloader = new Autoloader($rootDir);
//$autoloader->autoloadFromPhar();
$autoloader->bootstrapVendor();
