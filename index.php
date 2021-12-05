<?php

require "vendor/autoload.php";

session_start();

$router = new App\Routers\Router($_GET['url']);


// authController 
$router->get('/', "auth#showRegister");
$router->get('/login', "auth#showLogin");
$router->get('/register', "auth#showRegister");

$router->post('/', "auth#register");
$router->post('/login', 'auth#login');
$router->post('/register', 'auth#register');

// weatherController
$router->get('/dashboard', "weather#show");

// start router
$router->run();



