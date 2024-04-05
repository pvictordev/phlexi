<?php
// get the current user $user_id

// get the categories
$query = "SELECT * FROM categories";
$categoriesStatement = $db->query($query, []);
$categories = $categoriesStatement->fetchAll();

// get all the projects associated with the logged user
$queryProjects = "SELECT projects.*, categories.*
FROM projects
JOIN clients ON projects.project_id = clients.project_id
JOIN categories ON projects.category_id = categories.category_id
WHERE clients.user_id = :user_id";
$projectsStatement = $db->query($queryProjects, [
    'user_id' => $user_id
]);
$projects = $projectsStatement->fetchAll();

// add projects in the projects table 
if (isset($_POST)) {
}

// remove projects from the projects table 