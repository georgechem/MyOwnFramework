<?php


namespace Mvc\Controllers;

use Twig\Environment;

class BaseController
{
    protected string $controller = 'Pages';

    protected string $method = 'index';

    protected array $params = [];

    protected array $path = [];

    public function __construct($path)
    {
        $this->path = $path;

        if(isset($path[0])){
            $this->controller = $path[0];
            if(isset($path[1])){
                $this->method = $path[1];
                if(isset($path[2])){
                    $this->params[] = $path[2];
                }
            }
        }
        print_r($this->controller);
        print_r($this->method);
        print_r($this->params);


    }

}
