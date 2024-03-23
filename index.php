<?php

require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/blog' => 'controllers/blog.php',
    '/market' => 'controllers/market.php',
    '/team' => 'controllers/team.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    require 'views/partials/404.php';
    die();
}
