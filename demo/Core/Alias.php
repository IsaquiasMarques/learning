<?php

namespace Core;

class Alias{

    protected $aliases;

    public function __construct()
    {
        $config = require base_path('config/config.php');

        $this->aliases = [
            'database' => $config['database'],
            'container.names.for_database' => $config['container']['names']['for_database'],
            'container.names.for_authentication' => $config['container']['names']['for_authentication']
        ];
    }

    public function get_alias($key){    

        if(!key_exists($key, $this->aliases)){
            return throw new \Exception("No matching alias for {$key}");
        }

        return $this->aliases[$key];
    }

}