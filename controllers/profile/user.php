<?php

// get particular user  by email in order to display the info on the profile page
$email = $_SESSION['email'];
// fetch particular users based on $_SESSION['email']
$query_users = "SELECT * FROM users WHERE email = :email";
$userStatement = $db->query($query_users, [
    'email' => $email,
]);
$user = $userStatement->fetch();

// delete user profile
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['user_id'])) {

        $user_id = $_POST['user_id'];

        $condition = 'user_id = :user_id';
        $params = [1];

        $result = $db->delete('users', $condition, [
            'user_id' => $user_id
        ]);

        // after delete redirect to home page and destroy the session
        session_destroy();
        header("Location: /");
        exit();
    } else {
        echo "error";
    }
}
