<?php
return [
    'db' => require('database.php'),
    'routes' => require('routes.php'),
    'view' => [
        'templatePath' => __DIR__ . '/../resources/views',
        'cachePath' => __DIR__ . '/../resources/cache',
    ],
];