<?php

use ZnUser\Rbac\Domain\Facades\FixtureGeneratorFacade;

return [
    'deps' => [
        'rbac_item',
    ],
    //'collection' => FixtureGeneratorFacade::generateInheritanceCollection(__DIR__ . '/../config/rbac.php'),
    'collection' => FixtureGeneratorFacade::generateInheritanceCollection($_ENV['ROOT_DIRECTORY'] . '/config/rbac.php'),
];