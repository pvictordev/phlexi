<?php

// get all users
$query = "select * from users";
$users = $db->query($query, [])->fetchAll();

// Function to check if email and password match with any user
function authenticateUser($users, $email, $password)
{
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $_SESSION['email'] = $email;
            return true;
        }
    }
    return false;
}

// error handling array
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        $errors['email'] = "Email is required";
    } else {
        $postEmail = $_POST['email'];
    }

    // Validate password
    if (!isset($_POST['password']) || empty($_POST['password'])) {
        $errors['password'] = "Password is required";
    } else {
        $postPassword = $_POST['password'];
    }

    // Proceed only if there are no validation errors
    if (empty($errors)) {
        // Check if email and password match with any user
        if (authenticateUser($users, $postEmail, $postPassword)) {
            // redirect the user only if he is authenticated
            $_SESSION['authenticated'] = true;
            header('Location: /profile');
            exit();
        } else {
            $errors['general'] = "Incorrect email or password";
        }
    }
}

require "./views/auth/signin.view.php";
