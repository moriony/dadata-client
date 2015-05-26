<?php

return [
    'baseUrl' => 'https://dadata.ru/api/v2/',
    'operations' => [
        'abstractOperation' => [
            'httpMethod' => 'POST',
            'responseModel' => 'jsonAsArray',
            'parameters' => [
                'Authorization' => [
                    'type' => 'string',
                    'location' => 'header',
                    'description' => 'Authorization token',
                ],
                'X-Secret' => [
                    'type' => 'string',
                    'location' => 'header',
                    'description' => 'Secret key',
                ],
                'body' => [
                    'type' => 'array',
                    'location' => 'json_body',
                    'description' => 'Request parameters',
                ]
            ]
        ],
        'cleanAddress' => [
            'extends' => 'abstractOperation',
            'uri' => 'clean/address',
        ],
        'cleanPhone' => [
            'extends' => 'abstractOperation',
            'uri' => 'clean/phone',
        ],
        'cleanPassport' => [
            'extends' => 'abstractOperation',
            'uri' => 'clean/passport',
        ],
        'cleanName' => [
            'extends' => 'abstractOperation',
            'uri' => 'clean/name',
        ],
        'cleanEmail' => [
            'extends' => 'abstractOperation',
            'uri' => 'clean/email',
        ],
        'cleanDate' => [
            'extends' => 'abstractOperation',
            'uri' => 'clean/birthdate',
        ],
        'cleanVehicle' => [
            'extends' => 'abstractOperation',
            'uri' => 'clean/vehicle',
        ],
        'clean' => [
            'extends' => 'abstractOperation',
            'uri' => 'clean',
        ],
    ],
    'models' => [
        'jsonAsArray' => [
            'type' => 'object',
            'additionalProperties' => [
                'location' => 'json'
            ]
        ]
    ]
];