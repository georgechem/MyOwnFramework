<?php


namespace App\Http\Exceptions;


class SwitcherException extends \Exception
{
    public function report()
    {
        echo 'Switcher Exception cought';
    }
}
