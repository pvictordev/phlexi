<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['user_id'])) {

        $user_id = $_POST['user_id'];

        $condition = 'user_id = :user_id';
        $params =  [
            'user_id' => $user_id
        ];

        $result = $db->delete('users', $condition, $params);

        // after deleting the user, redirect to home page and destroy the session
        session_destroy();
        header("Location: /");
        exit();
    } else {
        echo "error";
    }
}
