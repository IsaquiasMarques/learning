<?php

use Core\Authentication\Auth;
use Core\Container\Bootstrap;
use Core\Database;

$config = require base_path('config/config.php');

$bootstrapDatabase = new Bootstrap();
$bootstrapAuth = new Bootstrap();

$bootstrapDatabase->bind(config('container.names.for_database'), Database::class, function(){
    return new Database(config('database'));
});

$bootstrapAuth->bind(config('container.names.for_authentication'), Auth::class, function() {
    $user = (object) [
        'id' => 1,
        'name' => 'Isaquias',
        'email' => 'is@isaquiassebastiao.com'
    ];
    return new Auth($user);
});