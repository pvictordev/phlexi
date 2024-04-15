<?php

require_once 'SkillController.php';
$controller = new SkillController($db);
$controller->index();
