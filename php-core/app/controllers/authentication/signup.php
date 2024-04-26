<?php

require_once base_path('app/controllers/profile/user/UserController.php');

$controller = new UserController($db);

$controller->addUser();

$credentials = $controller->getVariables();

require base_path("app/views/authentication/signup.view.php");
