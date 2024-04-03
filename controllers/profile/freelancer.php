<?php
// Fetch skills and the id of a particular / freelancer
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

// insert the skill in the freelancers_skills table
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['skill_id'])) {

    // transform skill_id in int
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