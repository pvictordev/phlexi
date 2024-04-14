<?php

class UserModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getUser($user_id)
    {
        $query = "SELECT * FROM users WHERE user_id = :user_id";
        $userStatement = $this->db->query($query, [
            'user_id' => $user_id,
        ]);
        return $userStatement->fetch();
    }
}
