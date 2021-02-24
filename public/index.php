<?php

require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/../config/loader.php';


use App\Http\Switcher;
use Mvc\Controllers\PagesController;

$switcher = new Switcher($_SERVER);

if (isset($twig)) {
    $index = new PagesController($twig);
    echo $index->index();
}



