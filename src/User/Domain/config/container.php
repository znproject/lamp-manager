<?php

return [
    'definitions' => [
        'ZnBundle\User\Domain\Interfaces\Entities\IdentityEntityInterface' => 'App\User\Domain\Entities\IdentityEntity',
    ],
    'singletons' => [
        'ZnBundle\User\Domain\Interfaces\Services\TokenServiceInterface' => 'ZnBundle\User\Domain\Services\BearerTokenService',
    ],
];
