<?php

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


// ! end the session
if (isset($_GET['logout'])) {
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();
    echo "Logged out successfully.";
}

require "views/profile.view.php";
