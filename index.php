<?php

require "vendor/autoload.php";


$router = new App\Routers\Router($_GET['url']);

$router->get('/', function(){ echo 'test'; });
$router->get('/dashboard', "weather#show");
$router->get('/dashboard/:name', "weather#showWithCityName");

$router->run();



