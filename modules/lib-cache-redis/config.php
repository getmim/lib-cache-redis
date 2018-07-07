<?php
/**
 * Lib Cache Redis
 * @package lib-cache-redis
 * @version 0.0.1
 */

return [
    '__name' => 'lib-cache-redis',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getphun/lib-cache-redis.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-cache-redis' => ['install', 'update', 'remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-cache' => null
            ],
            [
                'lib-redis' => null
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibCacheRedis\\Driver' => [
                'type' => 'file',
                'base' => 'modules/lib-cache-redis/driver'
            ]
        ]
    ],

    'libCache' => [
        'handlers' => [
            'redis' => 'LibCacheRedis\\Driver\\Redis'
        ]
    ]
];