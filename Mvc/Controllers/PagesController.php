<?php


namespace Mvc\Controllers;


use App\Controller\BaseController;

class PagesController extends BaseController
{

    public function __construct()
    {
        parent::__construct($this->twig, $this->request);
    }

    public function index()
    {
        echo $this->twig->render('pages/index.html.twig', []);
    }

}
