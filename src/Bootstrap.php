<?php

declare(strict_types = 1);

session_start();
//$_SESSION['login'] = null;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Application.php';
require __DIR__ . '/../src/helpers/functions.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

\App\Application::run();
