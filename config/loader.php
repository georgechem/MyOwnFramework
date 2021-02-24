<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require __DIR__.'/../vendor/autoload.php';

/**
 * Template - Twig loader
 */
$loader = new FilesystemLoader(__DIR__.'/../templates');
$twig = new Environment($loader,[
    'debug'=>true,
    'cache'=> __DIR__.'/../cache',
]);
