<?php

use Core\Response;

require base_path('config/config.php');

/**
 * @param {$value} value to be dumped
 * 
 */
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function abort($code = 404){
    http_response_code($code);
    require base_path("views/errors/{$code}.php");
    die();
}

/**
 * 
 * @param {$value} actual uri
 * @param {$default} actual server path to the application
 */

function isUrl(string $value, $secondary = ''){

    if(!server($value)){
        return server($secondary);
    }

    return server($value);
}

function server($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::UNAUTHORIZED){
    if(!$condition){
        abort($status);
    }
}

function base_path($path){
    return BASE_PATH . $path;
}

function header_location($location = '/notes'){
    header("location: {$location}");
    die();
}

function view($path, $attrributes = []){

    extract($attrributes);

    require (base_path('views/' . $path));

}