<?php


namespace App\Controller;


class BaseController
{
    protected $twig;

    public static $controller;

    public function __construct()
    {
        $this->twig = require __DIR__ . '/../../loaders/packages/twig.php';

    }

    public function getTwig()
    {
        return $this->twig;
    }

    public static function initController($controller)
    {
        $controllerName = $controller['controllerName'];
        $methodName = $controller['methodName'];
        $params = $controller['params'];

        self::$controller = new $controllerName();

        if(method_exists(self::$controller, $methodName)){
            self::$controller->$methodName($params);
        }else{
            self::$controller->index($params);
        }


    }

}
