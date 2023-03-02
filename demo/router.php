<?php

$default = $local_server_path;
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    $default.'/' => 'controller/index.php',
    $default.'/about' => 'controller/about.php',
    $default.'/contact' => 'controller/contact.php'
];

function abort($code = 404){
    http_response_code($code);
    require("views/errors/{$code}.php");
    die();
}

if(key_exists($uri, $routes)){
    require($routes[$uri]);

}else{
    abort(404);
}