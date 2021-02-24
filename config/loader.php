<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * Template - Twig loader
 */

$loader = new FilesystemLoader(__DIR__.'/../templates');
$twig = new Environment($loader,[
    'debug'=>true,
    'cache'=> __DIR__.'/../cache',
]);

/**
 * Autoloader for Mvc|App
 */

spl_autoload_register(function($class){
    $rootDirectory = dirname(__DIR__);
    $root_src = $rootDirectory.'/';
    $files_src = $root_src.str_replace('\\','/', $class).'.php';

    if(isset($files_src)){
        require $files_src;

    }

});

