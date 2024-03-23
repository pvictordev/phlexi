<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// routes
$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/blog' => 'controllers/blog.php',
    '/market' => 'controllers/market.php',
    '/team' => 'controllers/team.php',
];

// routing the current uri to the coressponding controller  
function routeToController($uri, $routes)
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
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routes);
