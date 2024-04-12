<?php

// get particular user  by email in order to display the info on the profile page
$email = $_SESSION['email'];
// fetch particular users based on $_SESSION['email']
$query_users = "SELECT * FROM users WHERE email = :email";
$userStatement = $db->query($query_users, [
    'email' => $email,
]);
$user = $userStatement->fetch();
