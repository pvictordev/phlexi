<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- globals css !-->
    <!-- <link rel="stylesheet" type="text/css" href="../public/css/home.css" /> -->
    <?php
    if ($current_page === '/') {
        echo '<link rel="stylesheet" type="text/css" href="../public/css/home.css" />';
    } else if ($current_page === '/contact') {
        echo '<link rel="stylesheet" type="text/css" href="../public/css/contact.css" />';
    } else if ($current_page === '/blog') {
        echo '<link rel="stylesheet" type="text/css" href="../public/css/blog.css" />';
    } else if ($current_page === '/market') {
        echo '<link rel="stylesheet" type="text/css" href="../public/css/market.css" />';
    } else if ($current_page === '/team') {
        echo '<link rel="stylesheet" type="text/css" href="../public/css/team.css" />';
    }
    ?>

    <!-- favicon.svg -->
    <link rel="icon" type="image/svg+xml" href="../public/assets/favicon.svg" />

    <title>Home</title>
</head>

<body>