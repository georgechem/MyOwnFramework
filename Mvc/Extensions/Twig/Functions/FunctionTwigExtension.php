<?php


namespace Mvc\Extensions\Twig\Functions;

use Twig\Environment;
use Twig\TwigFunction;

class FunctionTwigExtension
{
    const CSS_ASSETS = '/css/';
    const JS_ASSETS = '/js/';

    private Environment $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
        // FUNCTION my_fun
        $this->my_fun();
        // FUNCTION asset
        $this->myCss();
        // FUNCTION js
        $this->myJavaScript();

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

    private function myCss()
    {
        $function = new TwigFunction('css', function($string){
           // css BODY

            return FunctionTwigExtension::CSS_ASSETS . $string;
        });

        $this->twig->addFunction($function);
    }

    private function myJavaScript()
    {
        $function = new TwigFunction('js', function($string){
            // js BODY
            return FunctionTwigExtension::JS_ASSETS . $string;
        });

        $this->twig->addFunction($function);
    }


}
