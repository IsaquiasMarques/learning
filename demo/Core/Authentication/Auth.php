<?php

namespace Core\Authentication;

class Auth extends Authentication{

    public function __construct(mixed $user)
    {
        parent::login($user);
    }

    public function User()
    {
        return parent::logged();
    }

}