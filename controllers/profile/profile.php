<?php

// Fetch skills and the id of a particular user
$user_id = $_SESSION['user_id'];

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

// Fetch all the skills
$query_skill = "SELECT * FROM skills";
$statement = $db->query($query_skill, []);
$skills = $statement->fetchAll();


// insert the skill in the freelancers_skills table
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['skill_id'])) {

    $skill_id = intval($_POST["skill_id"]);

    $table = "freelancers_skills";

    $data = [
        // ! unable to insert the user_id, because it is reffering to freelancers table, where we do not have all the users.
        // ! to fix this we should create a transaction in combination with database triggers
        // ! 1. create a trigger that will add a new user in the freelancers table, when creating a new record in the users table
        // ! 2. in the php code, use transactions in order to execute the operation of adding new user in the users table, and if it is successfull add the new user in the freelancers table
        'user_id' => $user_id,
        'skill_id' => $skill_id,
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

// remove the skill in the freelancers_skills table
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $skillId = $_POST['skill_id'];

//     $query = "DELETE FROM skills WHERE skill_id = ?";
//     $statement = $db->query($query, [$skillId]);

//     if ($statement) {
//         echo "Skill deleted successfully.";
//     } else {
//         echo "Failed to delete skill.";
//     }
// }

// get particular user by email in order to display the info on the profile page
$email = $_SESSION['email'];
// fetch particular users based on $_SESSION['email']
$query_users = "SELECT * FROM users WHERE email = :email";
$userStatement = $db->query($query_users, [
    'email' => $email,
]);
$user = $userStatement->fetch();

// render the view
require "views/profile.view.php";
