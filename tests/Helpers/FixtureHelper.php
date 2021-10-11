<?php

namespace Tests\Helpers;

class FixtureHelper
{

    public static function getCommonFixtures() {
        return [
            'rpc_route',
            'user_credential',
            'user_token',
            'rbac_assignment',
            'rbac_inheritance',
            'settings_system',
        ];
    }
}
