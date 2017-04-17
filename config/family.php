<?php

return [

    'emails' => [

        'support' => env('SUPPORT_EMAIL', 'support@familylifeclub.com'),

        'password-change' => env('PASSWORD_CHANGE', 'password-changer@example.com'),

        'welcome' => env('WELCOME_EMAIL', 'welcome-user@example.com'),

    ],

    'admin_receivers' => [
        '19', '21'
    ],

    'pair' => [
        'frequency' => 'weekly',
        'when' => 'mondays',
        'start' => '9:00',
        'end' => '15:00',
    ],

    'pair_expire' => 7, //in hours
];