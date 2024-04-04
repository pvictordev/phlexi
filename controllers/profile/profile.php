<?php
// get the logged user
$user_id = $_SESSION['user_id'];

// user actions
require "user.php";

// freelancer actions
require "freelancer.php";

// client actions
require "client.php";

// render the view
require "views/profile/profile.view.php";
