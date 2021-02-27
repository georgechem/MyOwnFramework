<?php


// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/../../Model"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);


// database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/../../db.sqlite',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

return $entityManager;
