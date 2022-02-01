<?php

namespace App\Controllers;

use Jenssegers\Blade\Blade;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public $blade;

    public function __construct()
    {
        $this->blade = new Blade('resources/views', 'cache');
    }

    public function index($request)
    {
        echo $this->blade->make('home')->render();
    }

    public function home($request)
    {
        echo $this->blade->make('home')->render();
    }

    public function contato($request)
    {
        echo $this->blade->make('contato')->render();
    }

    public function login($request)
    {
        if (isset($_SESSION['login'])) {
            header("Location: ./painel");
        } else {
            echo $this->blade->make('login')->render();
        }
    }

    public function painel($request)
    {
        if (!isset($_SESSION['login'])) {
            header("Location: ./login");
        } else {
            echo $this->blade->make('painel')->render();
        }
    }
}
