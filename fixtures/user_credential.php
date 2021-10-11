<?php

use App\Common\FixtureGenerators\UserCredential;

return [
    'deps' => [
        'user_identity',
    ],
    'collection' => (new UserCredential)->load(),
];
