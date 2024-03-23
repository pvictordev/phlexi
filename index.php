<?php

// functions
require "functions.php";

// connect to the db
// data source name
$dsn = 'mysql:host=localhost;port=3306;dbname=sa-project;user=root;charset=utf8mb4';

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from users");

$statement->execute();

$users = $statement->fetchAll(PDO::FETCH_ASSOC);


dd($users); // got the users 

// router
require "router.php";
