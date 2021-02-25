<?php


namespace App\Http\Router;


use App\Http\Route\Route;

class Router
{
    private $route;

    public function __construct()
    {
        $this->start();
    }

    private function start()
    {
        $this->route = Route::splitUri();
        print_r($this->route);
    }

}
