<?php

require "vendor/autoload.php";


$router = new App\Routers\Router($_GET['url']);

$router->get('/', function(){ echo 'test'; });
$router->get('/login', "weather#showLogin");
$router->get('/dashboard', "weather#show");
$router->get('/dashboard/:name', "weather#showWithCityName");

$router->run();



