<?php
// ! start the session
session_start();

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

if (isset($_POST['email']) && isset($_POST['password'])) {
    $postEmail = $_POST['email'];
    $postPassword = $_POST['password'];

    // Check if email and password match with any user
    if (authenticateUser($users, $postEmail, $postPassword)) {
        $_SESSION['authenticated'] = true;
        header('Location: /profile');
        exit();
    } else {
        $_SESSION['authenticated'] = false;
        header('Location: /signin');
        exit();
    }
} else {
    require "./views/auth/signin.view.php";
}
