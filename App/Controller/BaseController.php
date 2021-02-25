<?php


namespace App\Controller;



class BaseController
{


    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }


}
