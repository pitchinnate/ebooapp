<?php

require(__DIR__ . '/../vendor/autoload.php');

if(!isset($_ENV['DEVELOPMENT_MODE']) || $_ENV['DEVELOPMENT_MODE'] == false) {
    Kint::enabled(false);
}

if(file_exists(__DIR__ . '/../.env')) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
    $dotenv->load();
}

$config = require(__DIR__ . '/../config/config.php');

$app = \Eboo\Factory\AppFactory::getApp($config);
$app->run();