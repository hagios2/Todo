<?php


class Router
{
    

    protected $routes = [];


    public static function load($file)
    {
        
        $router = new static;
        
        
        require $file;


        return $router;

    }


    public function define($routes)
    {

        $this->routes = $routes;

    }

    /* Search through the defined routes */
    /* if uri exists direct it to the coresponding controller   */

    public function direct($uri)
    {

        if(array_key_exists($uri, $this->routes)) {

            return $this->routes[$uri];
        
        }else{

            Throw new Exception('No routes defined for this');
        }

    }

}