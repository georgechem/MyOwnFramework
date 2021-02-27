<?php


namespace Mvc\Extensions\Twig;


use Mvc\Extensions\Twig\Filters\FilterTwigExtension;
use Mvc\Extensions\Twig\Functions\FunctionTwigExtension;


class TwigExtension
{

    private FunctionTwigExtension $functions;

    private FilterTwigExtension $filter;

    public function __construct($twig)
    {
        // REGISTER ALL FUNCTIONS
        $this->functions = new FunctionTwigExtension($twig);
        // REGISTER ALL FILTERS
        $this->filter = new FilterTwigExtension($twig);

    }


}
