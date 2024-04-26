<?php

$router->get('/', 'app/controllers/index.php');
$router->get('/contact', 'app/controllers/contact.php');
$router->get('/blog', 'app/controllers/blog.php');
$router->get('/market', 'app/controllers/market.php');

$router->get('/signin', 'app/controllers/authentication/signin.php');
$router->post('/signin', 'app/controllers/authentication/signin.php');

$router->get('/signup', 'app/controllers/authentication/signup.php');
$router->post('/signup', 'app/controllers/authentication/signup.php');

$router->get('/logout', 'app/core/session.php');

$router->get('/profile', 'app/controllers/profile/profile.php');
$router->get('/profile/edit', 'app/controllers/profile/user/edit.php');
$router->put('/profile/edit', 'app/controllers/profile/user/edit.php');
$router->get('/profile/destroy', 'app/views/profile/user/destroy.view.php');
$router->delete('/destroy', 'app/controllers/profile/user/destroy.php');

$router->get('/profile/freelancer', 'app/controllers/profile/freelancer/freelancer.php');
$router->post('/profile/freelancer/addSkill', 'app/controllers/profile/freelancer/freelancer.php');
$router->post('/profile/freelancer', 'app/controllers/profile/freelancer/freelancer.php');

$router->get('/profile/client', 'app/controllers/profile/client/client.php');
$router->post('/profile/client', 'app/controllers/profile/client/client.php');
$router->get('/profile/client/edit', 'app/controllers/profile/client/project.php');
$router->post('/profile/client/edit', 'app/controllers/profile/client/project.php');
$router->post('/profile/client', 'app/controllers/profile/client/client.php');
