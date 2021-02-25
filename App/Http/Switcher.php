<?php


namespace App\Http;


use App\Http\Exceptions\SwitcherException;
use Mvc\Controllers\BaseController;

class Switcher
{
    private $uri;

    private array $path;

    public function __construct(array $server)
    {
        $this->uri = $server['REQUEST_URI'];
    }

    public function register($regex = '/[a-zA-Z0-9-\/]+/')
    {
        $path = Slicer::verifyPathRegex($regex, $this->uri);

        if(!$path && gettype($path) === 'boolean'){
            exit((new SwitcherException())->report());
        }

        new BaseController($path);


    }

}
