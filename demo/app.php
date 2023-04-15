<?php

use Core\Alias;
use Core\App;

function app($container_name, $class_name){
    return App::resolve($container_name, $class_name);
}

function config($term){
    // Enquanto não encontrar uma forma de usar variáveis fora para dentro da função config.
    // Vou usar o método de instanciar a cada vez que a funcção é chamada.

    $alias = new Alias();
    return $alias->get_alias($term);

}