<?php


namespace App\Http\Request;


use App\Controller\BaseController;
use App\Http\Router\Router;

class Request
{
    private Router $router;

    private array $request;

    private $baseController;

    private $twig;

    public function __construct($twig)
    {
        $this->router = new Router();
        $this->twig = $twig;
        $this->setRequest();
        $this->initBaseController();
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

    private function initBaseController()
    {
        $this->baseController = new BaseController($this->twig, $this->request);

    }


}
