<?php


namespace App\Http;


use App\Http\Exceptions\SlicerException;

class Slicer
{
    private static array $results = [];

    private static array $trim = [];


    public static function verifyPathRegex($regex, $path)
    {

        // pattern path allowed from regex
        preg_match_all($regex, $path, $tmp);
        if ($path !== $tmp[0][0]){
            return false;
        }
        $tmp = explode('/', $path);
        foreach ($tmp as $item){
            if($item !== ''){
                self::$results[] = $item;
            }
        }

        return self::$results;
    }



}
