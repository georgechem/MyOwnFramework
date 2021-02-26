<?php


namespace Mvc\Extensions\Twig;


use Mvc\Extensions\Twig\Functions\FunctionTwigExtension;
use Twig\Environment;
use Twig\TwigFunction;

class TwigExtension
{
    private Environment $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
        //print_r($twig);

        $function = $this->twigFunction();

        FunctionTwigExtension::my_fun($twig, $function);


    }

    private function twigFunction()
    {
        $function = new TwigFunction('my_fun', function(){
            print_r('ok');
        });
        return $function;
    }
}
