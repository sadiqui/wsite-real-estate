<?php

$router->get('/main/home', 'HomeController.php');
$router->get('/main/about', 'AboutController.php');
$router->get('/main/listings', 'ListingsController.php');
$router->get('/main/contact', 'ContactController.php');
$router->get('/main/login', 'LoginController.php');
$router->get('/main/signup', 'SignupController.php');
$router->get('/main/dashClient', 'ClientController.php');

// $router->get('/', 'Home.php');

// $router->get('/', 'Controllers/home.php');
// $router->get('/home', 'Controllers/home.php');
// $router->get('/login', 'Controllers/login.php');
// $router->get('/signup', 'Controllers/SignupController.php');

