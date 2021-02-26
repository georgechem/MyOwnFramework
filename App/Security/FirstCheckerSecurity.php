<?php


namespace App\Security;



use App\Security\Exceptions\SecurityException;

class FirstCheckerSecurity extends Security
{
    public static function run($request):bool
    {
        // IS session Active or None - ERROR on DISABLED
        self::isSession();
        return true;
    }


    private static function isSession()
    {
        $session_status = session_status();
        try {
            if($session_status === 0){
                throw new SecurityException();
            }
        }catch(SecurityException $e){
            exit($e->getInfo());
        }

    }

}
