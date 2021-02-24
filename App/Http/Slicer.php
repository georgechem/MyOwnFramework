<?php


namespace App\Http;


use App\Http\Exceptions\SlicerException;

class Slicer
{
    private static $controller = 'Pages';

    private static $method = 'index';

    private static $params = [];

    private static $results = [];

    private static $trim = [];


    public static function verifyPathRegex($regex, $path):bool
    {
        preg_match_all($regex, $path, self::$results);

        return true;
    }

    public static function separatePath($path)
    {
        self::$trim = explode('/', $path);
        print_r(self::$trim);
        print_r(self::$results[0]);
        for($i =0; $i < count(self::$results); $i++){
            if((self::$results[0][$i]) !== (self::$trim[$i+1])){
                print_r(self::$trim[$i]);
                echo '<br/>';
                exit((new SlicerException('SlicerException'))->getMessage());
            }


        }
        //print_r(self::$trim);

        return self::$trim;
    }


}
