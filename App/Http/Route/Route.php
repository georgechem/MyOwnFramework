<?php


namespace App\Http\Route;


class Route
{
    private static string $controller;

    private static string $method;

    private static array $params;

    private static array $uri;

    public static function splitUri()
    {
        $uriExplode = explode('/',$_SERVER['REQUEST_URI'], 4);


        if (isset($uriExplode[1]) && !empty($uriExplode[1])) {
            preg_match('/[a-zA-Z-]+/', $uriExplode[1], $tmp);
            if (!empty($tmp)) {
                self::$controller = $tmp[0];
            } else {
                self::$controller = 'pages';
            }
        } else {
            self::$controller = 'pages';
        }


        if (isset($uriExplode[2]) && !empty($uriExplode[2])) {
            preg_match('/[a-zA-Z-]+/', $uriExplode[2], $tmp);
            if(!empty($tmp)){
                self::$method = $tmp[0];
            }else{
                self::$method = 'index';
            }
        } else {
            self::$method = 'index';
        }


        if (isset($uriExplode[3]) && !empty($uriExplode[3])) {
            preg_match('/[0-9]+/', $uriExplode[3], $tmp);
            self::$params = $tmp;
        } else {
            self::$params = [];
        }

        return [
            'controller' => self::$controller,
            'method' => self::$method,
            'params'=> self::$params,
        ];


    }

}
