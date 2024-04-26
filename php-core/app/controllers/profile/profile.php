<?php
require base_path('app/models/SkillModel.php');
require base_path('app/models/ProjectModel.php');
require base_path('app/models/UserModel.php');

$skillModel = new SkillModel($db);
$projectModel = new ProjectModel($db);
$userModel = new UserModel($db);

// get the logged user
$user_id = $_SESSION['user_id'];

// user data
$user = $userModel->getUser($user_id);

// user / freelancer skills
$userSkills = $skillModel->getUserSkills($user_id);

// user / client projects
$userProjects = $projectModel->getUserProjects($user_id);

// render the view
require base_path("app/views/profile/profile.view.php");
