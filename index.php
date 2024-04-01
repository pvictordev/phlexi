<?php

// functions
require "core/functions.php";

// database class
require "./config/Database.php";

//db config for local environment
$config = require("./config/config.php");

// new instance of the Database
$db = new Database($config['database']);

// router
require "router.php";
