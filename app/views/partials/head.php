<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- globals css !-->
    <?php
    $page_styles = [
        '/' => '/resources/css/home.css',
        '/contact' => '/resources/css/contact.css',
        '/signup' => '/resources/css/globals/style.css',
        '/profile' => '/resources/css/globals/style.css',
        '/signin' => '/resources/css/globals/style.css',
        '/blog' => '/resources/css/blog.css',
        '/market' => '/resources/css/market.css',
        '/team' => '/resources/css/team.css'
    ];

    $default_style = '/resources/css/globals/style.css';

    $style = isset($page_styles[$current_page]) ? $page_styles[$current_page] : $default_style;

    echo '<link rel="stylesheet" type="text/css" href="' . $style . '" />';
    ?>

    <!-- favicon.svg -->
    <link rel="icon" type="image/svg+xml" href="/resources/assets/favicon.svg" />

    <title>
        <?php
        $page_titles = [
            '/' => 'Home',
            '/contact' => 'Contact',
            '/signup' => 'Sign Up',
            '/profile' => 'Profile',
            '/profile/edit' => 'Edit',
            '/profile/freelancer' => 'Freelancer',
            '/profile/client' => 'Client',
            '/signin' => 'Sign In',
            '/blog' => 'Blog',
            '/market' => 'Market',
            '/team' => 'Team'
        ];

        $default_title = 'Home';

        $title = isset($page_titles[$current_page]) ? $page_titles[$current_page] : $default_title;

        echo $title;
        ?>
    </title>
</head>

<body>