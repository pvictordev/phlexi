<?php

// functions
require "core/functions.php";

// database class
require "Database.php";

//db config for local environment
$config = require("config.php");

// new instance of the Database
$db = new Database($config['database']);

// router
require "router.php";

// query as a separate var
$query = "select * from skills";
// protecting from sql injection, never accept user input and inline it as a part of the database query
$skills = $db->query($query, [])->fetchAll();
// show the skills
