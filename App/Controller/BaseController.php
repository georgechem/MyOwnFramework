<?php


namespace App\Controller;



use App\Http\Request\Request;

class BaseController
{
    protected $twig;

    private Request $request;

    public function __construct($twig, Request $request)
    {
        $this->twig = $twig;

        $this->request = $request;
    }
    private function runController()
    {


    }

    protected function getTwig()
    {
        return $this->twig;
    }


}
