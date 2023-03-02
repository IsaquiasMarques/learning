<?php

require('config/config.php');

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

/**
 * 
 * @param {$value} actual uri
 * @param {$default} actual server path to the application
 */

function isUrl(string $value){
    return $_SERVER['REQUEST_URI'] === '/temporary/demo'.$value;
}