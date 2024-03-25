<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input data from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform authentication
    if ($email === 'victor@mail.com' && $password === '123') {
        echo 'success';
        exit();
    } else {
        echo 'fail';
        exit();
    }
}

require "views/auth/signin.view.php";
