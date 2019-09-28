<?php

return [
    'config' => [
        'default' => [
            'appkey' => env('TAOBAO_TOP_APP_KEY', ''),
            'secretKey' => env('TAOBAO_TOP_APP_SECRET_KEY', ''),
            'format' => 'json',
            'sandbox' => false,
        ]
    ]
];
