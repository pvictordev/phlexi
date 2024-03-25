<?php
require("./models/UserModel.php");

class UserController
{
    public function __construct()
    {
    }

    public function signin()
    {
        // Handle sign in logic
    }

    public function signup()
    {
        // Handle signup logic
    }
}


// Instantiate controller and execute action
$action = isset($_POST["action"]) ? $_POST["action"] : "";
$userController = new UserController();

if ($action == "signin") {
    $userController->signin();
} elseif ($action == "signup") {
    $userController->signup();
} else {
    // sign in form
    echo "invalid credentials";
}
