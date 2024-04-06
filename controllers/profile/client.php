<?php

// get the categories
$query = "SELECT * FROM categories";
$categoriesStatement = $db->query($query, []);
$categories = $categoriesStatement->fetchAll();

// add projects in the projects table 

// remove projects from the projects table

// render the view
require "./views/profile/client.view.php";
