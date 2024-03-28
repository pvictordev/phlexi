<?php

// path
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// routes
$routes = [
    '/' => 'controllers/index.php',
    '/signup' => 'controllers/signup.php',
    '/signin' => 'controllers/signin.php',
    '/profile' => 'controllers/profile.php',
    '/contact' => 'controllers/contact.php',
    '/blog' => 'controllers/blog.php',
    '/market' => 'controllers/market.php',
    '/team' => 'controllers/team.php',
];

// routing the current uri to the coressponding controller  
function routeToController($uri, $routes, $db)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

// if page not exist, abort
function abort($code = 404)
{
    http_response_code($code);
    require "views/errors/{$code}.php";
    die();
}

routeToController($uri, $routes, $db);
