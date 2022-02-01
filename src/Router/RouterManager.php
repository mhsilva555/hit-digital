<?php

namespace App\Router;

class RouterManager
{
    private $request;

    function __construct($request)
    {
        $this->request = $request;

        $this->path = $this->request->getPathInfo();

        $this->run();
    }

    private function run()
    {
        $routes = include('Routes.php');

        foreach ($routes as $route) {
            if ($this->path == $route[1]) {
                 $controllerStr = $route[2];

                $controllerPieces = explode('::', $controllerStr);

                if (sizeof($controllerPieces) == 1) {
                    $controller = new $controllerPieces[0];

                    if (method_exists($controller, 'index')) {
                        $controller->index($this->request);
                    } else {
                        throw new \Exception('O método solicitado não existe', 404);
                    }

                    break;
                } elseif (sizeof($controllerPieces) == 2) {
                    $controller = new $controllerPieces[0]();

                    $methodStr = $controllerPieces[1];

                    if (method_exists($controller, $methodStr)) {
                        $controller->$methodStr($this->request);
                    } else {
                        throw new \Exception("O método solicitado não existe", 404);
                    }

                    break;
                }
            }
        }

    }
}