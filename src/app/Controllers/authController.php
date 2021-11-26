<?php

namespace App\Controllers;

use App\Services\authService;

class authController {

    protected authService $authService;

    public function __construct(authService $authService)
    {
        $this->authService = $authService;
    }


    public function register() {
        // fetch request API terence 
        $object = $_POST;
    }

    public function login() {
        $object = $_POST;
        // fetch request API terence 
        $this->authService->setUser($object["username"], "Lyon", true); 
    }

    public function showLogin() {
        echo Controller::getTwig()->render('login.html.twig');
    }

    public function showRegister() {
        echo Controller::getTwig()->render('register.html.twig');
    }
}

?>