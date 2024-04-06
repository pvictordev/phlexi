<?php

// get all the skills 
$querySkill = "SELECT * FROM skills";
$statement = $db->query($querySkill, []);
$skills = $statement->fetchAll();

// add skills for the logged user
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $skill_id = intval($_POST['skill_id']);

    $user_id = $_SESSION['user_id'];

    $table = "freelancers_skills";

    $data = [
        'user_id' => $user_id,
        'skill_id' => $skill_id,
    ];

    $rowsInserted = $db->insert($table, $data);

    // redirect to profile
    header("Location: /profile");

    if ($rowsInserted < 0) {
        // Insertion error
        dd($rowsInserted);
    }
}

// remove the skills for the logged user


// render the view
require "./views/profile/freelancer.view.php";
