<?php

return [
    'host' => (isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : '127.0.0.1'),
    'user' => (isset($_ENV['DB_USER']) ? $_ENV['DB_USER'] : 'db_user'),
    'password' => (isset($_ENV['DB_PASSWORD']) ? $_ENV['DB_PASSWORD'] : ''),
    'database' => (isset($_ENV['DB_DATABASE']) ? $_ENV['DB_DATABASE'] : 'eboomvc'),
];