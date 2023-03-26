<?php

namespace Core\Container;

use Core\App;
use Core\Container\Container;

class Bootstrap{

    public function bind($containerName, $key, $callback){

        $container = new Container();
        $container->bind($key, $callback);

        static::setContainer($containerName, $container);

    }

    public static function setContainer($containerName, $container){
        App::setContainer($containerName, $container);
    }
    
}