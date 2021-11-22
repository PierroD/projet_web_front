<?php 

namespace App\Controllers;

class weatherController {

    public function show() {
        echo Controller::getTwig()->render('home.html.twig', ['person' => [
            'name' => 'Paris'
        ]]);
    }

    public function showWithCityName($name) {
        
        echo Controller::getTwig()->render('home.html.twig', ['person' => [
            'name' => $name
        ]]);
    }

    public function showLogin() {
        echo Controller::getTwig()->render('login.html.twig');
    }
}