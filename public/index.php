<?php

use App\Http\Request\Request;

require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/../config/loader.php';

$request = new Request();

print_r($_REQUEST);
