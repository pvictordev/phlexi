<?php

// functions
require "functions.php";

// router
require "router.php";

// database class
require "Database.php";

//db config for local environment
$config = require("config.php");

// new instance of the Database
$db = new Database($config['database']);

$users = $db->query("select * from users")->fetch(PDO::FETCH_ASSOC);

dd($users);
