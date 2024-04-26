<?php

require_once 'ProjectController.php';
require_once base_path('app/models/ProjectModel.php');

$controller = new ProjectController($db);
$controller->index();

$project_id = $_GET['edit_project'];
$user_id = $_SESSION['user_id'];

// get categories
$projectModel = new ProjectModel($db);

$categories = $projectModel->getCategories();

// get particular project
$project = $projectModel->getUserProject($project_id);

require base_path('app/views/profile/client/project.view.php');
