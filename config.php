<?php

return [

    'database' => [

        'dbname' => 'mytodo',

        'username' => 'admin',

        'password' => 'iamadmin8853',

        'connection' => 'mysql:host=localhost; port=3306;',

        'options' => [

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]

    ]


];