<?php

// Fetch skill names from the skills database
$query = "SELECT * FROM skills";
$skillsStatement = $db->query($query, []);
$skills = $skillsStatement->fetchAll();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['skill_name'])) {

    $skill_name = $_POST["skill_name"];

    $table = "skills";

    $data = [
        'skill_name' => $skill_name,
    ];

    $rowsInserted = $db->insert($table, $data);

    if ($rowsInserted > 0) {
        // Insertion successful
        echo "Skill inserted successfully.";
    } else {
        // Insertion failed
        echo "Failed to insert skill.";
    }
}

// Check if the form for deleting a skill is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $skillId = $_POST['skill_id'];

    $query = "DELETE FROM skills WHERE skill_id = ?";
    $statement = $db->query($query, [$skillId]);

    if ($statement) {
        echo "Skill deleted successfully.";
    } else {
        echo "Failed to delete skill.";
    }
}

// check by email
$email = $_SESSION['email'];
// fetch particular users based on  $_SESSION['email']
$query_users = "SELECT * FROM users WHERE email = :email";
$userStatement = $db->query($query_users, [
    'email' => $email,
]);
$user = $userStatement->fetch();

// check by user_id
$user_id = $_SESSION['user_id'];
// fetch freelancer skills 
$query = "SELECT * FROM freelancers_skills";
$statement = $db->query($query, []);
$freelancersSkills = $statement->fetch();

// render the view
require "views/profile.view.php";
