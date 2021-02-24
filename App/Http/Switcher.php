<?php


namespace App\Http;


use App\Http\Exceptions\SwitcherException;

class Switcher
{
    private $uri;

    private array $path;

    public function __construct(array $server)
    {
        $this->uri = $server['REQUEST_URI'];
    }

    public function register($regex = '/[a-zA-Z0-9-]+/')
    {

        if(!Slicer::verifyPathRegex($regex, $this->uri)){
            exit((new SwitcherException())->report());
        }

        $this->path = Slicer::separatePath($this->uri);


    }

}
