<?php

require_once base_path('app/controllers/profile/user/UserController.php');

$controller = new UserController($db);

$controller->signin();

require base_path("app/views/authentication/signin.view.php");
