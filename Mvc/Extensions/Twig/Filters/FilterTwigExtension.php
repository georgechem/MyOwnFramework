<?php


namespace Mvc\Extensions\Twig\Filters;


use Twig\TwigFilter;

class FilterTwigExtension
{
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
        // FILTER my_fil
        $this->my_fil();
    }

    private function my_fil()
    {
        $filter = new TwigFilter('my_fil', function($string){
            // BODY of my_fil TWIG
            $string .= '.....';
            return $string;
        });

        $this->twig->addFilter($filter);

    }

}
