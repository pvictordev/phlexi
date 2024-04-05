<?php

// select the logged user
$user_id = $_SESSION['user_id'];

// fetch particular users based on $_SESSION['email']
$query_users = "SELECT * FROM users WHERE user_id = :user_id";
$userStatement = $db->query($query_users, [
    'user_id' => $user_id,
]);
$user = $userStatement->fetch();

// update the user data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // preserve form data
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
    $phone = $_POST['phone'];

    $table = 'users';
    $data = array('user_name' => $user_name, 'email' => $email, 'bio' => $bio, 'phone' => $phone);
    $condition = 'user_id = :user_id'; // Example condition
    $params = [
        'user_id' => $user_id,
    ];

    $affectedRows = $db->update($table, $data, $condition, $params);

    header('Location: /profile');
}

// render the view
require "views/profile/edit.view.php";
