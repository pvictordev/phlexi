<?php

require_once base_path('app/controllers/profile/user/UserController.php');

$user_id = $_SESSION['user_id'];

$controller = new UserController($db);

if (isset($_GET['user_id'])) {
    require base_path("app/views/profile/user/destroy.view.php");
}

$controller->removeUser($user_id);
