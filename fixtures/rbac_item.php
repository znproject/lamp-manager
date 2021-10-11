<?php

use ZnUser\Rbac\Domain\Facades\FixtureGeneratorFacade;

return [
    //'collection' => FixtureGeneratorFacade::generateItemCollection(__DIR__ . '/../config/rbac.php'),
    'collection' => FixtureGeneratorFacade::generateItemCollection($_ENV['ROOT_DIRECTORY'] . '/config/rbac.php'),
];