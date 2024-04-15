<?php

// uri to be accessed
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// routes
$routes = [
    '/' => 'app/controllers/index.php',
    '/signup' => 'app/controllers/auth/signup.php',
    '/signin' => 'app/controllers/auth/signin.php',
    '/logout' => 'app/controllers/auth/logout.php',
    '/profile' => 'app/controllers/profile/profile.php',
    '/profile/edit' => 'app/controllers/profile/user/edit.php',
    '/profile/destroy' => 'app/controllers/profile/user/destroy.php',
    '/profile/freelancer' => 'app/controllers/profile/freelancer/freelancer.php',
    '/profile/client' => 'app/controllers/profile/client/client.php',
    '/profile/client/edit' => 'app/controllers/profile/client/project.php',
    '/contact' => 'app/controllers/contact.php',
    '/blog' => 'app/controllers/blog.php',
    '/market' => 'app/controllers/market.php',
    '/team' => 'app/controllers/team.php',
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
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

// if page does not exist, abort
function abort($code = 404)
{
    http_response_code($code);
    require base_path("app/views/errors/{$code}.php");
    die();
}

routeToController($uri, $routes, $db);
