<?php

// get all users
$query = "SELECT * FROM users";
$users = $db->query($query, [])->fetchAll();

// Function to check if email and password match with any user
function authenticateUser($users, $email, $password)
{
    foreach ($users as $user) {
        // compare the emails and hashed passwords
        if ($user['email'] === $email) {
            // ! i have to align this line in the password field, but it is a security concern, since we make equality just by string 
            // !|| $password == $user['password']
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['email'] = $email;
                return true; // Authentication successful
            }
        }
    }
    return false;
}

// do not permit the user who is authenticated to access the sign in page
if ($_SESSION['authenticated'] ?? false) {
    header('Location: /');
    exit();
}

// error handling array
$errors = array();

// preserve form data
$email = '';
$password = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // preserve form data
    $email = $_POST['email'];
    $password = $_POST["password"];

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
        $postPassword = $_POST["password"];
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
