<?php
// ! start the session
session_start();

// uri to be accessed
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// routes
$routes = [
    '/' => 'controllers/index.php',
    '/signup' => 'controllers/signup.php',
    '/signin' => 'controllers/signin.php',
    '/logout' => 'controllers/logout.php',
    '/profile' => 'controllers/profile/profile.php',
    '/profile/edit' => 'controllers/profile/edit.php',
    '/profile/freelancer' => 'controllers/profile/freelancer.php',
    '/profile/client' => 'controllers/profile/client.php',
    '/contact' => 'controllers/contact.php',
    '/blog' => 'controllers/blog.php',
    '/market' => 'controllers/market.php',
    '/team' => 'controllers/team.php',
];

function isAuth()
{
    // Check if the user is authenticated
    if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
        header('Location: /signin');
        exit();
    }
}

// routing the current uri to the coressponding controller 
function routeToController($uri, $routes, $db)
{
    if (array_key_exists($uri, $routes)) {
        // if user is unauth he will not be able to access these routes
        if (in_array($uri, ['/profile', '/market'])) {
            isAuth();
        }
        require $routes[$uri];
    } else {
        abort();
    }
}

// if page does not exist, abort
function abort($code = 404)
{
    http_response_code($code);
    require "views/errors/{$code}.php";
    die();
}

routeToController($uri, $routes, $db);
