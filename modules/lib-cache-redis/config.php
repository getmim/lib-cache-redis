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
    '__inject' => [
        [
            'name' => 'libRedis',
            'question' => 'lib-redis app config',
            'children' => [
                [
                    'name' => 'cache',
                    'children' => [
                        [
                            'name' => 'socket',
                            'question' => 'Connection socket',
                            'rule' => 'any'
                        ],
                        [
                            'name' => 'host',
                            'question' => 'Connection hostname',
                            'default' => '127.0.0.1',
                            'rule' => 'any'
                        ],
                        [
                            'name' => 'port',
                            'question' => 'Connection port number',
                            'default' => '6379',
                            'rule' => 'any'
                        ],
                        [
                            'name' => 'password',
                            'question' => 'Connection password',
                            'rule' => 'any'
                        ],
                        [
                            'name' => 'db',
                            'question' => 'DB Index',
                            'rule' => 'number'
                        ],
                        [
                            'name' => 'prefix',
                            'question' => 'Key prefix',
                            'rule' => 'any'
                        ]
                    ]
                ]
            ]
        ]
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