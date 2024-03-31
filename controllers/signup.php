<?php

// defined password variable to access it in view
$password = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_name'])) {

    // Retrieve form data
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // error handling array
    $errors = array();

    // table where to insert the data 
    $table = "users";

    $data = [
        'user_name' => $user_name,
        'email' => $email,
        'password' => $password
    ];

    try {
        // Attempt to insert data into the database
        $rowsInserted = $db->insert($table, $data);

        if ($rowsInserted > 0) {
            // Insertion successful, redirect to sign-in page
            header('Location: /signin');
            exit();
        } else {
            // Insertion failed
            $errors['general'] = "Failed to create account";
        }
    } catch (PDOException $e) {
        // Check if the exception is due to duplicate entry
        if ($e->errorInfo[1] == 1062) {
            $errors['email'] = "Email already exists. Please choose a different email.";
        } else {
            $errors['general'] = "Database error: " . $e->getMessage();
        }
    }
}

require "views/auth/signup.view.php";
