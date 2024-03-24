<?php

class UserModel
{
    public function authenticateUser($email, $password)
    {
        // auth sign in, query database
        // return user data if auth was succesfull, otherwise return false
    }

    public function registerUser($email, $password, $name)
    {
        // auth logic, insert into database
        // return user data if register was succesfull, otherwise return false
    }
}
