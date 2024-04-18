<?php

require_once 'ProjectController.php';
require_once base_path('app/models/ProjectModel.php');

// get the methods in order to perform CRUD operations
$controller = new ProjectController($db);
$controller->index();

$projectModel = new ProjectModel($db);
$user_id = $_SESSION['user_id'];

// Fetch Categories and Projects
$categories = $projectModel->getCategories();
$projects = $projectModel->getUserProjects($user_id);

// Render the view
require base_path("app/views/profile/client/client.view.php");
