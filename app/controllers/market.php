<?php

require base_path('app/models/ProjectModel.php');

$projectModel = new ProjectModel($db);

$projects = $projectModel->getProjects();

// render the view
view('market.view.php');
