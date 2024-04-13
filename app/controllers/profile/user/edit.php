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

    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    // Check if old password matches the current password
    if (!password_verify($old_password, $user['password'])) {
        $errors['match'] = 'Your current password does not match with the provided password';
    }

    if (empty($errors)) {
        // Hash the new password
        $password = password_hash($new_password, PASSWORD_DEFAULT);

        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $bio = $_POST['bio'];
        $phone = $_POST['phone'];

        $table = 'users';
        $data = array(
            'user_name' => $user_name,
            'email' => $email,
            'bio' => $bio,
            'phone' => $phone,
            'password' => $password
        );
        $condition = 'user_id = :user_id'; // Example condition
        $params = array('user_id' => $user['user_id']);

        $affectedRows = $db->edit($table, $data, $condition, $params);

        header('Location: /profile');
        exit;
    }
}


// render the view
require base_path("app/views/profile/user/edit.view.php");
