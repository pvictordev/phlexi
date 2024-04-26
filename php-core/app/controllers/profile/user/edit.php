<?php
require base_path('app/models/UserModel.php');
require base_path('app/controllers/profile/user/UserController.php');

$user_id = $_SESSION['user_id'];

// create the instance of the model
$userModel = new UserModel($db);
$userController = new UserController($db);

// get the data of a particular user
$user = $userModel->getUser($user_id);

// edit user
$userController->editUser($user_id);

// render the view
require base_path("app/views/profile/user/edit.view.php");
