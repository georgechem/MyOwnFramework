<?php

use App\Http\Request\Request;
use App\Http\Response\Response;
use Dotenv\Dotenv;

require __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

require __DIR__ . '/../loaders/loader.php';


$request = new Request();


$response = new Response($request);
//print_r($request);
