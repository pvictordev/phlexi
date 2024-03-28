<?php
require("./models/UserModel.php");

class UserController
{
    private $userModel;

    public function __construct($db)
    {
        $this->userModel = new UserModel($db);
    }

    public function signin()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            // Authenticate user
            $user = $this->userModel->authenticateUser($email, $password);

            if ($user) {
                // Start session and store user data
                session_start();
                $_SESSION["user"] = $user;

                // Redirect to home page
                header("Location: /");
                exit();
            } else {
                // Sign in failed, display error message
                require_once("./views/auth/signin.view.php");
            }
        } else {
            // Display Sign in form
            require_once("./views/auth/signin.view.php");
        }
    }

    public function signup()
    {
        // Handle signup logic
    }
}


// Instantiate controller and execute action
$action = isset($_POST["action"]) ? $_POST["action"] : "";
$userController = new UserController($db);

if ($action == "signin") {
    $userController->signin();
} elseif ($action == "signup") {
    $userController->signup();
} else {
    // default sign in form
    require "./views/auth/signin.view.php";
}
