<?php


namespace App\Controller;



class BaseController
{
    protected $twig;



    public function __construct()
    {
        $this->twig = require dirname(dirname(__DIR__)).'/loaders/packages/twig.php';

    }


}
