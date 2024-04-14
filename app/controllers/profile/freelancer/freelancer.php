<?php

// get all the skills for the select 
// $querySkill = "SELECT * FROM skills";
// $statement = $db->query($querySkill, []);
// $skills = $statement->fetchAll();

// // get all the skills associated with the logged user
// $query = "SELECT skills.*, freelancers_skills.user_id 
// FROM skills 
// INNER JOIN (
//     SELECT skill_id, user_id 
//     FROM freelancers_skills
//     WHERE user_id = :user_id
// ) AS freelancers_skills 
// ON skills.skill_id = freelancers_skills.skill_id";

// $skillsStatement = $db->query($query, ['user_id' => $_SESSION['user_id']]);
// $userSkills = $skillsStatement->fetchAll();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // add skills for the logged user
//     if (isset($_POST['skill_id'])) {
//         // Add skills for the logged user
//         $skill_id = intval($_POST['skill_id']);
//         $user_id = $_SESSION['user_id'];

//         $table = "freelancers_skills";
//         $data = [
//             'user_id' => $user_id,
//             'skill_id' => $skill_id,
//         ];
//         $rowsInserted = $db->store($table, $data);

//         if ($rowsInserted < 0) {
//             // Insertion error
//             dd($rowsInserted);
//         }
//     }
//     // Remove the skill for the logged user 
//     elseif (isset($_POST['remove_skill'])) {

//         $skill_id = intval($_POST['remove_skill']);
//         $user_id = $_SESSION['user_id'];

//         // Perform deletion from freelancers_skills table
//         $table = "freelancers_skills";
//         $condition = "user_id = :user_id AND skill_id = :skill_id";
//         $params = ['user_id' => $user_id, 'skill_id' => $skill_id];
//         $rowsDeleted = $db->destroy($table, $condition, $params);

//         if ($rowsDeleted === false) {
//             // Deletion error
//             dd("Error deleting skill.");
//         }
//     }

//     // Redirect to profile after processing the request
//     header("Location: /profile");
//     exit();
// }

// // render the view
// require base_path("app/views/profile/freelancer/freelancer.view.php");

require_once 'SkillController.php';
$controller = new SkillController($db);
$controller->index();
