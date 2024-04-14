<?php
require base_path('app/models/SkillModel.php');
require base_path('app/models/ProjectModel.php');

$skillModel = new SkillModel($db);
$projectModel = new ProjectModel($db);

// get the logged user
$user_id = $_SESSION['user_id'];

// user data
require "user/show.php";

// user / freelancer skills
$userSkills = $skillModel->getUserSkills($user_id);

// user / client projects
$userProjects = $projectModel->getUserProjects($user_id);

// render the view
require base_path("app/views/profile/profile.view.php");
