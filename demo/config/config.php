<?php

/**
 * 
 * @var {$local_server_path} root path for xampp server
 * {XAMPP path} htdocs/temporary/demo
 */

// $local_server_path = '/learning/demo/public';
$local_server_path = '';

return [
    'database' => [
        'host' => 'localhost',
        'dbname' => 'php_beginner_learning_db',
        'port' => 3306
    ],
    'container' => [
        'names' => [
            'for_database' => 'database',
            'for_authentication' => 'auth'
        ] 
    ],
];