<?php


namespace App\Security;



use App\Security\Exceptions\SecurityException;

class FirstCheckerSecurity extends Security
{
    public static function run($request):bool
    {
        // IS session Active or None - ERROR on DISABLED
        self::isSession();
        self::sessionStart();
        $_SESSION[session_name()] = session_id();
        return true;
    }
    private static function sessionStart()
    {
        session_start([
            'cookie_lifetime' => $_ENV['variable']['cookie_lifetime'] ?? 3600,
            'read_and_close' => $_ENV['variable']['read_and_close'] ?? false,
        ]);
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

        return $session_status;

    }


}
