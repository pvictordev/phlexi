<?php

// BASE_PATH
const BASE_PATH = __DIR__ . '/../';

// functions
require BASE_PATH . "app/core/functions.php";

// base path function
spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

// database class
require base_path("config/Database.php");

//db config for local environment
$config = require(base_path("config/config.php"));

// new instance of the Database
$db = new Database($config['database']);

// router
require base_path("router.php");
