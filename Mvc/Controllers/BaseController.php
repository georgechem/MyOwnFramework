<?php


namespace Mvc\Controllers;


class BaseController
{
    protected string $controller = 'Pages';

    protected string $method = 'index';

    protected array $params = [];

    public function __construct($path)
    {

    }

}
