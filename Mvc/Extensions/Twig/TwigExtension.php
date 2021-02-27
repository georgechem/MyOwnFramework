<?php


namespace Mvc\Extensions\Twig;


use Mvc\Extensions\Twig\Functions\FunctionTwigExtension;


class TwigExtension
{

    private FunctionTwigExtension $functions;

    public function __construct($twig)
    {

        $this->functions = new FunctionTwigExtension($twig);

    }


}
