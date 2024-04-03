<?php

// get the projects, and the categories associated with the category_id
$query = "SELECT * FROM categories";
$categoriesStatement = $db->query($query, []);
$categories = $categoriesStatement->fetchAll();
