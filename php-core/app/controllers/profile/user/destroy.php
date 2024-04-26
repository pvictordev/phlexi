<?php

require_once base_path('app/controllers/profile/user/UserController.php');

$user_id = $_SESSION['user_id'];

$controller = new UserController($db);

$controller->removeUser($user_id);
