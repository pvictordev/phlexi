<?php
require base_path('app/models/UserModel.php');

// create the instance of the model
$userModel = new UserModel($db);

$user_id = $_SESSION['user_id'];

// get the data of a particular user
$user = $userModel->getUser($user_id);

// update the user data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    // Check if old password matches the current password
    if (!empty($old_password) && !password_verify($old_password, $user['password'])) {
        $errors['match'] = 'Your current password does not match with the provided password';
    }

    if (empty($errors)) {
        // Hash the new password if it's not empty
        if (!empty($new_password)) {
            $password = password_hash($new_password, PASSWORD_DEFAULT);
        }

        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $bio = $_POST['bio'];
        $phone = $_POST['phone'];

        $table = 'users';
        $data = array(
            'user_name' => $user_name,
            'email' => $email,
            'bio' => $bio,
            'phone' => $phone
        );

        // Include the password field in the data array only if the new password is not empty
        if (!empty($new_password)) {
            $data['password'] = $password;
        }

        $condition = 'user_id = :user_id';
        $params = array('user_id' => $user['user_id']);

        $affectedRows = $db->edit($table, $data, $condition, $params);

        header('Location: /profile');
        exit;
    }
}

// render the view
require base_path("app/views/profile/user/edit.view.php");
