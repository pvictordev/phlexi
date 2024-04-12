<?php

// get the categories
$query = "SELECT * FROM categories";
$categoriesStatement = $db->query($query, []);
$categories = $categoriesStatement->fetchAll();

// get all the projects associated with the logged user
$user_id = $_SESSION['user_id'];
$queryProjects = "SELECT projects.*, categories.*
FROM projects
JOIN categories ON projects.category_id = categories.category_id
WHERE projects.user_id = :user_id";
$projectsStatement = $db->query($queryProjects, [
    'user_id' => $user_id
]);
$projects = $projectsStatement->fetchAll();

// add / remove projects from the projects
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $category_id = intval($_POST['category']);
    $price = $_POST['price'];
    $status = $_POST['status'];
    $description = $_POST['description'];

    if (isset($user_id) && isset($category_id) && isset($price) && isset($status) && isset($description)) {

        //Add project data for the logged user
        $user_id = $_SESSION['user_id'];
        $category_id = intval($_POST['category']);
        $price = $_POST['price'];
        $status = $_POST['status'];
        $description = $_POST['description'];

        $table = "projects";
        $data = [
            'user_id' => $user_id,
            'category_id' => $category_id,
            'price' => $price,
            'status' => $status,
            'description' => $description,
        ];
        $rowsInserted = $db->store($table, $data);

        if ($rowsInserted < 0) {
            // Insertion error
            dd($rowsInserted);
        }
    }
    //Remove the project for the logged user
    elseif (isset($_POST['remove_project'])) {

        $project_id = intval($_POST['remove_project']);
        $user_id = $_SESSION['user_id'];

        // Perform deletion from freelancers_skills table
        $table = "projects";
        $condition = "user_id = :user_id AND project_id = :project_id";
        $params = ['user_id' => $user_id, 'project_id' => $project_id];

        $rowsDeleted = $db->destroy($table, $condition, $params);

        if ($rowsDeleted === false) {
            // Deletion error
            dd("Error deleting skill.");
        }
    }

    // Redirect to profile after processing the request
    header("Location: /profile");
    exit();
}

// render the view
require base_path("app/views/profile/client/client.view.php");
