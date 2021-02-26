<?php


namespace Mvc\Extensions\Twig\Functions;


class FunctionTwigExtension
{
    public static function my_fun($twig, $function)
    {
        $twig->addFunction($function);
    }

}
