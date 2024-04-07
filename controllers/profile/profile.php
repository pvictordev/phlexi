<?php
// get the logged user
$user_id = $_SESSION['user_id'];

// user actions
require "user.php";

// freelancer
// get all the skills assoicated with the logged user
$query = "SELECT skills.*, freelancers_skills.user_id 
FROM skills 
INNER JOIN (
    SELECT skill_id, user_id 
    FROM freelancers_skills
    WHERE user_id = :user_id
) AS freelancers_skills 
ON skills.skill_id = freelancers_skills.skill_id";

$skillsStatement = $db->query($query, ['user_id' => $user_id]);
$userSkills = $skillsStatement->fetchAll();

// client
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

// render the view
require "views/profile/profile.view.php";
