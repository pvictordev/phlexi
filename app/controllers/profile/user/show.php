<?php
require base_path('app/models/UserModel.php');

$userModel = new UserModel($db);

$user_id = $_SESSION['user_id'];

// get the data of a particular user
$user = $userModel->getUser($user_id);
