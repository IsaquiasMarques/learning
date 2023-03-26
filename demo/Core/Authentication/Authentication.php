<?php

namespace Core\Authentication;

class Authentication{

    private $user;

    protected function login(mixed $user){
        return $this->user = $user;
    }

    protected function logged(){
        return $this->user;
    }

}