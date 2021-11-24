<?php

require "vendor/autoload.php";

session_start();

$router = new App\Routers\Router($_GET['url']);

$router->get('/', "weather#showRegister");
$router->get('/login', "weather#showLogin");
$router->get('/register', "weather#showRegister");
$router->get('/dashboard', "weather#show");
$router->get('/dashboard/:name', "weather#showWithCityName");

$router->post('/login', 'auth#login');
$router->post('/register', 'auth#register');

$router->run();



