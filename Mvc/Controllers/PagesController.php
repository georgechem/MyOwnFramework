<?php


namespace Mvc\Controllers;


use Twig\Environment;

class PagesController extends BaseController
{
    protected $twig;

    public function __construct(Environment $twig)
    {
        parent::__construct($this->path);

        $this->twig = $twig;
    }

    public function index()
    {

        return $this->twig->render('pages/index.html.twig',[
            'data' => $_SERVER,
        ]);
    }

}
