<?php

$routes = [
    ['GET', '/', 'App\Controllers\HomeController'],
    ['GET', '/home', 'App\Controllers\HomeController::home'],
    ['GET', '/contato/', 'App\Controllers\HomeController::contato'],
    ['GET', '/contato', 'App\Controllers\HomeController::contato'],
    ['GET', '/login', 'App\Controllers\HomeController::login'],
    ['GET', '/painel', 'App\Controllers\HomeController::painel'],
    ['GET', '/painel/sair', 'App\Controllers\PainelController::sair'],
    ['POST', '/painel/update', 'App\Controllers\PainelController::update'],
    ['POST', '/loginUser', 'App\Controllers\LoginController::loginUser'],
    ['GET', '/contato/enviaEmail', 'App\Controllers\EmailController::enviaEmail'],
];

return $routes;
