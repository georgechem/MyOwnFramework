<?php


namespace App\Security;


class FirstCheckerSecurity extends Security
{
    public static function run($request):bool
    {
        return true;
    }


    private static function isSession()
    {

    }

}
