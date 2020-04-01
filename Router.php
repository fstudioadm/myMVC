<?php 

class Router{

    // public function __construct(){
    //     echo 'Привет мир!';
    // }


    protected static $routes = []; 
    protected static $route = [];

    public static function add($regexp, $route = []){
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes(){
        return self::$routes;
    }

    public static function getRoute(){
        return self::$route;
    }

    public static function matchRoute($url){
        foreach(self::$routes as $pattern => $route){
            if()

        }
    }

}


