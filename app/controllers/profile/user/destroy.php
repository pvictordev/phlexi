<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_id = $_SESSION['user_id'];

    $condition = 'user_id = :user_id';
    $params =  [
        'user_id' => $user_id
    ];

    $result = $db->destroy('users', $condition, $params);

    // after deleting the user, redirect to home page and destroy the session
    session_destroy();
    header("Location: /");
    exit();
}

require base_path("app/views/profile/user/destroy.view.php");
