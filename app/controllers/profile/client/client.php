<?php

require_once 'ProjectController.php';
require_once base_path('app/models/ProjectModel.php');

// get the methods in order to perform CRUD operations
$controller = new ProjectController($db);
$controller->index();

// Fetch Categories and Projects
$projectModel = new ProjectModel($db);
$user_id = $_SESSION['user_id'];

$categories = $projectModel->getCategories();
$projects = $projectModel->getUserProjects($user_id);

// Render the view
require base_path("app/views/profile/client/client.view.php");
