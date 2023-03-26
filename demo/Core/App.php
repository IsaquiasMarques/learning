<?php

namespace Core;

class App{

    protected static $container = [];

    public static function setContainer($option, $container){
        static::$container[$option] = $container;
    }

    public static function container($key){
        return static::$container[$key];
    }

    public static function resolve($option, $key){
        // dd(static::$container);
        return static::$container[$option]->resolve($key);
    }

}