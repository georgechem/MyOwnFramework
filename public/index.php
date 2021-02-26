<?php

use App\Controller\BaseController;
use App\Http\Request\Request;
use App\Security\FirstCheckerSecurity;
use Dotenv\Dotenv;

require __DIR__.'/../vendor/autoload.php';

// ENVIRONMENT VARIABLES
$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

// VARIABLES, FRAMEWORK & COMPONENTS
require __DIR__ . '/../loaders/loader.php';

// Client Request
$request = new Request();
// First Security Wall - NO REAL SECURITY
$security = FirstCheckerSecurity::run($request);

// GET, SET AND RUN CONTROLLER
BaseController::initController($request->getController());





