<?php


namespace Mvc\Controllers;


use App\Controller\BaseController;



class PagesController extends BaseController
{
    public function __construct()
    {
        parent::__construct($this->twig);
    }

    public function index($params = [])
    {

        echo 'ok';
        /*
        echo $this->getTwig()->render('pages/index.html.twig', [

        ]);*/
    }

}
