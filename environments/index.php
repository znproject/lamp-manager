<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:
 *
 * ```php
 * return [
 *     'environment name' => [
 *         'path' => 'directory storing the local files',
 *         'skipFiles'  => [
 *             // list of files that should only copied once and skipped if they already exist
 *         ],
 *         'setWritable' => [
 *             // list of directories that should be set writable
 *         ],
 *         'setExecutable' => [
 *             // list of files that should be set executable
 *         ],
 *         'setCookieValidationKey' => [
 *             // list of config files that need to be inserted with automatically generated cookie validation keys
 *         ],
 *         'createSymlink' => [
 *             // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *         ],
 *     ],
 * ];
 * ```
 */

$commonConfig = [
    'setWritable' => [
        'var',
        'public/uploads',
    ],
    'setExecutable' => [
        'bin'
    ],
    'random' => [
        '.env.local',
        '.env.test',
    ],
    /*'setCookieValidationKey' => [
        '.env.local',
    ],*/
];

return [
    'Development' => array_merge($commonConfig, [
        'path' => 'dev',
    ]),
    'Testing' => array_merge($commonConfig, [
        'path' => 'testing',
    ]),
    'Ci' => array_merge($commonConfig, [
        'path' => 'ci',
    ]),
];
