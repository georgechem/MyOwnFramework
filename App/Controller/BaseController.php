<?php


namespace App\Controller;


class BaseController
{
    protected $twig;

    protected $request;

    protected $router;

    public function __construct($twig, $request)
    {
        $this->twig = $twig;
        $this->request = $request;

    }


}
