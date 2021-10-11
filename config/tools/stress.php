<?php

use GuzzleHttp\RequestOptions;

$baseUrl = $_ENV['API_URL'];

return [
    [
        'title' => 'Read only',
        'name' => 'read_only',
        'synchQueryCount' => 50,
        'ageCount' => 50,
        'queryCollection' => [
            [
                'url' => $baseUrl,
                'method' => 'POST',
                'options' => [
                    RequestOptions::FORM_PARAMS => [
                        "data" => [
                            "jsonrpc" => "2.0",
                            "method" => "partnerAuth.getToken",
                            "params" => [
                                "login" => "admin",
                                "password" => "Wwwqqq111",
                            ],
                            "meta" => [],
                            "id" => null,
                        ],
                    ]
                ],
            ],
        ],
    ],
];
