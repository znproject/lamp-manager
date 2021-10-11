<?php

namespace Deployer;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/zntool/deployer/src/config/bootstrap.php';
//require_once __DIR__ . '/vendor/deployer/deployer/recipe/common.php';

require_once __DIR__ . '/vendor/zntool/deployer/src/recipe/app/deploy.php';
require_once __DIR__ . '/vendor/zntool/deployer/src/recipe/app/settings.php';
require_once __DIR__ . '/vendor/zntool/deployer/src/recipe/app/upgrade_vendor.php';
require_once __DIR__ . '/vendor/zntool/deployer/src/recipe/tools.php';
//requireLibs(__DIR__ . '/src/Deployer/recipe');

App::initVarsFromArray([
    'repository' => 'git@gitlab.com:casino-zero/tournament.git',
    'branch' => 'clean',
    'deploy_path' => '/var/www/casino-zero/tournament',
    'release_path' => '/var/www/casino-zero/tournament',
    'release_public_path' => '{{release_path}}/public_html',
    'deploy_public_path' => '{{current_path}}/public_html',

    'deploy_var_path' => '{{deploy_path}}/var',
    'release_var_path' => '{{release_path}}/var',
    'current_path' => '{{deploy_path}}/current',

    'domain' => 'localhost',

    'application' => 'mysite',
    'permissions' => [
        [
            'path' => '{{deploy_var_path}}',
        ],
    ],
    'ssh_key_list' => [
        [
            'name' => 'my-github',
            'host' => 'github.com',
        ],
        [
            'name' => 'my-gitlab',
            'host' => 'gitlab.com',
        ],
    ],
]);

App::init();
