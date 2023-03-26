<?php

namespace Core;

class Router{

    protected $routes = [];

    protected function add($uri, $controller, $method = 'GET'){

        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];

    }

    public function get($uri, $controller){
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller){
        $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller){
        $this->add($uri, $controller, 'DELETE');
    }

    public function patch($uri, $controller){
        $this->add($uri, $controller, 'PATCH');
    }

    public function put($uri, $controller){
        $this->add($uri, $controller, 'PUT');
    }

    function abort($code = 404){
        http_response_code($code);
        require base_path("views/errors/{$code}.php");
        die();
    }

    function route($uri, $method){

        // dd($method);
        // dd($this->routes);

        foreach($this->routes as $route){

            if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require base_path($route['controller']);
            }

        }

        $this->abort(404);
    }

}