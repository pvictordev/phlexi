<?php

require_once 'ProjectController.php';

// get the projects
$controller = new ProjectController($db);
$controller->index();
