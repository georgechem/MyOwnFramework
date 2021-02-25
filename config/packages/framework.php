<?php

/**
 * Autoloader for Mvc|App
 */
spl_autoload_register(function($class){
    $rootDirectory = dirname(dirname(__DIR__));
    $root_src = $rootDirectory.'/';
    $files_src = $root_src.str_replace('\\','/', $class).'.php';
    if(file_exists($files_src)){
        require $files_src;
    }
});
