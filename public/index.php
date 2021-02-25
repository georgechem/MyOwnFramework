<?php

use App\Http\Request\Request;
use Dotenv\Dotenv;

require __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

require __DIR__.'/../config/loader.php';

$request = new Request();

