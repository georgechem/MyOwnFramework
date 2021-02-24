<?php


namespace Mvc\Controllers;


use Twig\Environment;

class PagesController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index()
    {
        /*
        return $this->twig->render('pages/index.html.twig',[
            'data' => $_SERVER,
        ]);*/
    }

}
