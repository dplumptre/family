<?php

return [

    'emails' => [

        'support' => env('SUPPORT_EMAIL', 'support@familylifeclub.com'),

        'password-change' => env('PASSWORD_CHANGE', 'password-changer@example.com'),

        'welcome' => env('WELCOME_EMAIL', 'welcome-user@example.com'),

    ],

    'messages' => [

    ],

    'admin_receivers' => [
        19, 21, 22, 25
    ],

    'pair' => [
        'frequency' => 'weekly',
        'when' => 'mondays',
        'start' => '9:00',
        'end' => '15:00',
    ],

    'pair_expire' => 7*60, //in hours to minutes

    'pair_expire_minutes' => 5,

    'max_receivers_before_admin' => 5,

];