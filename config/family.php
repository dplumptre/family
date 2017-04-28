<?php

return [

    'emails' => [

        'support' => env('SUPPORT_EMAIL', 'support@familylifeclub.com'),

        'password-change' => env('PASSWORD_CHANGE', 'password-changer@example.com'),

        'welcome' => env('WELCOME_EMAIL', 'welcome-user@example.com'),

    ],

    'messages' => [

    ],

    'pair_expire_minutes' => env('PAIR_EXPIRE_MINUTES', 59),

    'max_receivers_before_admin' => env('RECEIVERS_BEFORE_ADMIN', 5),

];