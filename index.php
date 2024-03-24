<?php

// functions
require "functions.php";

// router
require "router.php";
require "Database.php";

// new instance of the Databse
$db = new Database();

$users = $db->query("select * from users ")->fetch(PDO::FETCH_ASSOC);

dd($users);
