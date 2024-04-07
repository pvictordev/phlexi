<?php

// get the categories
$query = "SELECT * FROM categories";
$categoriesStatement = $db->query($query, []);
$categories = $categoriesStatement->fetchAll();

// get all the projects associated with the logged user
$user_id = $_SESSION['user_id'];
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
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['skill_id'])) {
//         // Add skills for the logged user
//         $skill_id = intval($_POST['skill_id']);
//         $user_id = $_SESSION['user_id'];

//         $table = "freelancers_skills";
//         $data = [
//             'user_id' => $user_id,
//             'skill_id' => $skill_id,
//         ];
//         $rowsInserted = $db->insert($table, $data);

//         if ($rowsInserted < 0) {
//             // Insertion error
//             dd($rowsInserted);
//         }
//     } elseif (isset($_POST['remove_skill'])) {
//         // Remove the skill for the logged user
//         $skill_id = intval($_POST['remove_skill']);
//         $user_id = $_SESSION['user_id'];

//         // Perform deletion from freelancers_skills table
//         $table = "freelancers_skills";
//         $condition = "user_id = :user_id AND skill_id = :skill_id";
//         $params = ['user_id' => $user_id, 'skill_id' => $skill_id];
//         $rowsDeleted = $db->delete($table, $condition, $params);

//         if ($rowsDeleted === false) {
//             // Deletion error
//             dd("Error deleting skill.");
//         }
//     }

//     // Redirect to profile after processing the request
//     header("Location: /profile");
//     exit();
// }

// remove projects from the projects table

// render the view
require "./views/profile/client.view.php";
