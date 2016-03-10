<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://login/login.yaml',
    'modified' => 1448727634,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'route' => false,
        'redirect' => NULL,
        'rememberme' => [
            'enabled' => true,
            'timeout' => 1800,
            'name' => 'grav-rememberme'
        ],
        'oauth' => [
            'enabled' => false,
            'user' => [
                'autocreate' => false,
                'access' => [
                    'site' => [
                        'login' => true
                    ]
                ]
            ],
            'providers' => [
                'Facebook' => [
                    'enabled' => false,
                    'credentials' => [
                        'key' => NULL,
                        'secret' => NULL
                    ]
                ],
                'Google' => [
                    'enabled' => false,
                    'credentials' => [
                        'key' => NULL,
                        'secret' => NULL
                    ]
                ],
                'GitHub' => [
                    'enabled' => false,
                    'credentials' => [
                        'key' => NULL,
                        'secret' => NULL
                    ]
                ],
                'Twitter' => [
                    'enabled' => false,
                    'credentials' => [
                        'key' => NULL,
                        'secret' => NULL
                    ]
                ]
            ]
        ]
    ]
];
