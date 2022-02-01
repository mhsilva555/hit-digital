<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;

use App\Router\RouterManager;

class Application
{
    private static $http_request;
    private static $routerManager;

    public static function run()
    {
        self::$http_request = Request::createFromGlobals();

        self::$routerManager = new RouterManager(self::$http_request);

    }
}
