<?php

use ZnCore\Base\Helpers\PhpHelper;
use ZnLib\Init\Domain\Helpers\RequirementHelper;

/**
 * Adjust requirements according to your application specifics.
 */
return [
    // Database :
    [
        'name' => 'PDO extension',
        'mandatory' => true,
        'condition' => extension_loaded('pdo'),
        'by' => 'All DB-related classes',
    ],
    [
        'name' => 'PDO SQLite extension',
        'mandatory' => false,
        'condition' => extension_loaded('pdo_sqlite'),
        'by' => 'All DB-related classes',
        'memo' => 'Required for SQLite database.',
    ],
    [
        'name' => 'PDO MySQL extension',
        'mandatory' => false,
        'condition' => extension_loaded('pdo_mysql'),
        'by' => 'All DB-related classes',
        'memo' => 'Required for MySQL database.',
    ],
    [
        'name' => 'PDO PostgreSQL extension',
        'mandatory' => false,
        'condition' => extension_loaded('pdo_pgsql'),
        'by' => 'All DB-related classes',
        'memo' => 'Required for PostgreSQL database.',
    ],
    // Cache :
    [
        'name' => 'Memcache extension',
        'mandatory' => false,
        'condition' => extension_loaded('memcache') || extension_loaded('memcached'),
        'by' => '<a href="http://www.yiiframework.com/doc-2.0/yii-caching-memcache.html">MemCache</a>',
        'memo' => extension_loaded('memcached') ? 'To use memcached set <a href="http://www.yiiframework.com/doc-2.0/yii-caching-memcache.html#$useMemcached-detail">MemCache::useMemcached</a> to <code>true</code>.' : ''
    ],
    [
        'name' => 'APC extension',
        'mandatory' => false,
        'condition' => extension_loaded('apc'),
        'by' => '<a href="http://www.yiiframework.com/doc-2.0/yii-caching-apccache.html">ApcCache</a>',
    ],
    // CAPTCHA:
    [
        'name' => 'GD PHP extension with FreeType support',
        'mandatory' => false,
        'condition' => RequirementHelper::checkGd(),
        'by' => '<a href="http://www.yiiframework.com/doc-2.0/yii-captcha-captcha.html">Captcha</a>',
        'memo' => RequirementHelper::getGdMemo(),
    ],
    [
        'name' => 'ImageMagick PHP extension with PNG support',
        'mandatory' => false,
        'condition' => RequirementHelper::checkImagick(),
        'by' => '<a href="http://www.yiiframework.com/doc-2.0/yii-captcha-captcha.html">Captcha</a>',
        'memo' => RequirementHelper::getImagickMemo(),
    ],
    // PHP ini :
    'phpExposePhp' => [
        'name' => 'Expose PHP',
        'mandatory' => false,
        'condition' => PhpHelper::checkPhpIniOff("expose_php"),
        'by' => 'Security reasons',
        'memo' => '"expose_php" should be disabled at php.ini',
    ],
    'phpAllowUrlInclude' => [
        'name' => 'PHP allow url include',
        'mandatory' => false,
        'condition' => PhpHelper::checkPhpIniOff("allow_url_include"),
        'by' => 'Security reasons',
        'memo' => '"allow_url_include" should be disabled at php.ini',
    ],
    'phpSmtp' => [
        'name' => 'PHP mail SMTP',
        'mandatory' => false,
        'condition' => PhpHelper::checkPhpIniNotEmpty("SMTP"),
        'by' => 'Email sending',
        'memo' => 'PHP mail SMTP server required',
    ],
];
