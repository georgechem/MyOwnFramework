<?php

/**
 * Template - Twig loader
 */

$loader = new \Twig\Loader\ FilesystemLoader(__DIR__ . '/../../templates');
$twig = new \Twig\Environment($loader,[
    'debug'=>true,
    'cache'=> __DIR__ . '/../../cache',
]);

return $twig;
