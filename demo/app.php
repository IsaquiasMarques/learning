<?php

use Core\App;

function app($resolver, $class){
    return App::resolve($resolver, $class);
}