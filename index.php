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
