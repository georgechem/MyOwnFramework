<?php


namespace App\Http\Response;


use App\Http\Request\Request;

class Response
{
    private $twig;

    public function __construct(Request $request)
    {
        $this->twig = require dirname(__DIR__).'/../../loaders/packages/twig.php';

    }

}
