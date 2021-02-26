<?php

use Symfony\Component\Finder\Finder;

/**
 * FINDER FOR public location
 */
$finder_public = new Finder();
$finder_public->in($_ENV['variable']['root_path'].'/public/');

