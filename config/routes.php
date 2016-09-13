<?php

return [
    'home' => 'HomeController->getHome',
    'home/{id}' => 'HomeController->getTest',
    '/' => function() {
        return (new \Eboo\Response('Welcome to the homepage'));
    },
];