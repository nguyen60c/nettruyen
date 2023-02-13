<?php

return [
    'offline' => env('ASSETS_OFFLINE', true),
    'enable_version' => env('ASSETS_ENABLE_VERSION', false),
    'version' => env('ASSETS_VERSION', time()),
    'scripts' => [
        'app',
        'jquery'
    ],
    'styles' => [
        'bootstrap',
        'style'
    ],
    'resources' => [
        'scripts' => [
            'app' => [
                'use_cdn' => false,
                'location' => 'footer',
                'src' => [
                    'local' => 'public/js/sb-admin-2.js',
                ],
            ],
            'jquery' => [
                'use_cdn' => true,
                'location' => 'header',
                'src' => [
                    'cdn' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js',
                ],
            ],
        ],
        'styles' => [
            'bootstrap' => [
                'use_cdn' => true,
                'location' => 'header',
                'src' => [
                    'cdn' => 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css',
                ],
                'attributes' => [
                    'integrity' => 'sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB',
                    'crossorigin' => 'anonymous',
                ],
            ],
            'style' => [
                'use_cdn' => false,
                'location' => 'header',
                'src' => [
                    'local' => '/css/sb-admin-2.css',
                ],
            ]
        ],
    ],
];
