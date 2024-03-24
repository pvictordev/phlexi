<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input data from the form
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Perform authentication (replace this with your actual authentication logic)
    if ($email === 'victor@mail' && $password === '123') {
        echo 'success';
        exit();
    } else {
        echo 'fail';
        exit();
    }
}

require "views/auth/signin.view.php";
