<?php

// $routes = [
//     '/' => 'app/controllers/index.php',
//     '/signup' => 'app/controllers/authentication/signup.php',
//     '/signin' => 'app/controllers/authentication/signin.php',
//     '/logout' => 'app/core/session.php',
//     '/profile' => 'app/controllers/profile/profile.php',
//     '/profile/edit' => 'app/controllers/profile/user/edit.php',
//     '/profile/destroy' => 'app/controllers/profile/user/destroy.php',
//     '/profile/freelancer' => 'app/controllers/profile/freelancer/freelancer.php',
//     '/profile/client' => 'app/controllers/profile/client/client.php',
//     '/profile/client/edit' => 'app/controllers/profile/client/project.php',
//     '/contact' => 'app/controllers/contact.php',
//     '/blog' => 'app/controllers/blog.php',
//     '/market' => 'app/controllers/market.php',
//     '/team' => 'app/controllers/team.php',
// ];

$router->get('/', 'app/controllers/index.php');
$router->get('/contact', 'app/controllers/contact.php');
$router->get('/blog', 'app/controllers/blog.php');
$router->get('/market', 'app/controllers/market.php');

$router->get('/profile', 'app/controllers/profile/profile.php');

$router->get('/signin', 'app/controllers/authentication/signin.php');
$router->get('/signup', 'app/controllers/authentication/signup.php');
