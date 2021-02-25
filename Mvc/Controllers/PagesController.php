<?php


namespace Mvc\Controllers;


use App\Controller\BaseController;


class PagesController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($params = [])
    {

        /*echo $this->twig->render('pages/index.html.twig', [
            'request' => '',
        ]);*/
    }

}
