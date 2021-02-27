<?php


namespace Mvc\Extensions\Twig\Functions;

use Twig\Environment;
use Twig\TwigFunction;

class FunctionTwigExtension
{

    private Environment $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
        // FUNCTION my_fun
        $this->my_fun();

    }

    private function my_fun()
    {
        $function = new TwigFunction('my_fun', function(){
            // BODY of my_fun TWIG
            if(!empty($_SESSION['PHPSESSID'])){
                return 'ACTIVE';
            }else{
                return 'NOT-ACTIVE';
            }
        });

        $this->twig->addFunction($function);

    }

}
