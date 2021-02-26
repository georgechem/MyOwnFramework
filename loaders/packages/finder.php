<?php

use Symfony\Component\Finder\Finder;

$finder_public = new Finder();

$finder_public->in($_ENV['variable']['root_path']);

