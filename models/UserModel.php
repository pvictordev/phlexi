<?php

class UserModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function authenticateUser($email, $password)
    {
        // query for email
        $query = "SELECT * FROM users where email = :email";

        //execute the statement
        $statement = $this->db->query($query, [':email' => $email]);
        // get the result
        $user = $statement->fetch();
        //check if user exists and password is correct
        if ($user && password_verify($password, $user['password'])) {
            // Password is correct, return user data
            return $user;
        }

        return false;
    }

    public function registerUser($firstname, $lastname, $email, $password)
    {
        // auth logic, insert into database
        // return user data if register was succesfull, otherwise return false
    }
}
