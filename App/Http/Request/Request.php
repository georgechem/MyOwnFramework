<?php


namespace App\Http\Request;


use App\Http\Router\Router;

class Request
{
    private $router;

    public function __construct()
    {
        $this->router = new Router();
    }

}
