<?php

// get the projects, and the categories associated with the category_id
$query = "SELECT projects.*, categories.* 
FROM projects 
INNER JOIN categories ON projects.category_id = categories.category_id";
$projectsStatement = $db->query($query, []);
$projects = $projectsStatement->fetchAll();

// render the view
require BASE_PATH . "app/views/market.view.php";
