<?php 


class Router{
    
    protected $routes = [];


    public function get( $uri, $controller ){
        $this->add( 'GET', $uri, $controller );
    }

    public function add( $method, $uri, $controller ){
        
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ]; 

    }

    public function router( $uri, $method ){
        // echo '<pre>';
        // print_r($this->route);

        // foreach ($this->route as $key => $route ){
        //     // require 
        //      // echo '<pre>';
        // print_r($route);
        //     if( $uri = $route['uri'] && $method == $route['method'] ){
        //         return require 'controller/'.$route['controller'];
        //     }
        // }

        foreach ($this->routes as $route) {

            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require 'controller/'.$route['controller'];
            }
        }

        echo 'Nothing found';

        
    }
}