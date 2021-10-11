<?php

use App\Common\FixtureGenerators\UserIdentity;

return [
    'deps' => [],
    'collection' => (new UserIdentity)->load(),
];
