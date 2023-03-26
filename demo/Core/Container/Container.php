<?php

namespace Core\Container;

class Container{

    protected $bindings = [];

    public function bind($key, $callback){
        $this->bindings[$key] = $callback;
    }

    public function resolve($key){

        if(!key_exists($key, $this->bindings)){
            throw new \Exception("No matching binds for {$key}");
        }

        return call_user_func($this->bindings[$key]);
        
    }

}