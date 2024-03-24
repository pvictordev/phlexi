<?php

// functions
require "core/functions.php";

// router
require "router.php";

// database class
require "Database.php";

//db config for local environment
$config = require("config.php");

// new instance of the Database
$db = new Database($config['database']);

// Get the id in the separate var
$id = $_GET['user_id'];
// query as a separate var
$query = "select * from users where user_id = :id";
// protecting from sql injection, never accept user input and inline it as a part of the database query
$users = $db->query($query, [':id' => $id])->fetch();
// show the users
// dd($users);
