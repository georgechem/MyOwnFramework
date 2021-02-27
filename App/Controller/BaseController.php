<?php


namespace App\Controller;


use Mvc\Extensions\Twig\TwigExtension;

class BaseController implements ControllerInterface
{
    protected $twig;

    public static $controller;

    public function __construct()
    {
        // LOAD DOCTRINE
        $this->em = require __DIR__ . '/../../loaders/packages/doctrine.php';

        // Load TWIG
        $this->twig = require __DIR__ . '/../../loaders/packages/twig.php';
        // Add TWIG EXTENSIONS
        $extension = new TwigExtension($this->twig);


    }
    public function index()
    {
        echo 'Your page not found - 404';
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
