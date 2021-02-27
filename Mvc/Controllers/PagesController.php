<?php


namespace Mvc\Controllers;

use App\Controller\BaseController;
use Model\Product;


class PagesController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($params = [])
    {
        //$product = new Product();
        //$product->setName('product_test_name');

        //$this->em->persist($product);
        //$this->em->flush();
        //$productRepo = $this->em->getRepository(Product::class);
        //$products = $productRepo->findAll();


        echo $this->twig->render('pages/index.html.twig', [

        ]);
    }

}
