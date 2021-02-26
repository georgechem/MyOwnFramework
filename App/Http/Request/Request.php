<?php


namespace App\Http\Request;

use App\Http\Router\Router;


class Request
{
    private Router $router;

    private array $request;

    private string $controllerName;

    private string $methodName;

    private array $params;


    public function __construct()
    {
        $this->router = new Router();
        $this->setRequest();
        $this->checkController();
    }
    private function setRequest()
    {
        $this->request = [
            'method' => $_SERVER['REQUEST_METHOD'],
            'request_time' => $_SERVER['REQUEST_TIME_FLOAT'],
            'query_string' => $_SERVER['QUERY_STRING'],
            'http_host' => $_SERVER['HTTP_HOST'],
            'https'=> $_SERVER['HTTPS'] ?? '',
            'http_referer' => $_SERVER['HTTP_REFERER'] ?? '',
            'document_root' => $_SERVER['DOCUMENT_ROOT'],
        ];
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getController()
    {
        return [
            'controllerName' => $this->controllerName,
            'methodName' => $this->methodName,
            'params' => $this->params,
        ];
    }

    private function checkController()
    {
        $routes = $this->router->getRoute();
        $controller = ucwords($routes['controller']).'Controller';
        $controllerName = null;
        $method = $routes['method'];
        $methodName = null;
        $params = $routes['params'];

        $className = "\\Mvc\Controllers\\".$controller;

        if(class_exists($className)){
            $this->controllerName = $className;
        }else{
            $this->controllerName = "\\Mvc\\Controllers\\PagesController";
        }

        $this->methodName = $method;

        $this->params = $params;


    }


}
