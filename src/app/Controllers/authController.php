<?php

namespace App\Controllers;

use App\Services\authService;
use App\Services\apiService;

class authController {

    protected authService $authService;
    protected apiService $apiService;

    public function __construct(authService $authService, apiService $apiService)
    {
        $this->authService = $authService;
        $this->apiService = $apiService;
    }


    public function register() {
        $response = $this->apiService->sendPost("Login/register.php", $_POST);
        if(isset($response) && !empty($response)) {
            $this->authService->setUser($response->username, $response->city, true); 
                header('Location: /dashboard');
            }
        }

    public function login() {
        $response = $this->apiService->sendPost("Login/login.php", $_POST);
        if(isset($response) && !empty($response)) {
        $this->authService->setUser($response->username, $response->city, true); 
            header('Location: /dashboard');
        }
    }

    public function showLogin() {
        echo Controller::getTwig()->render('login.html.twig');
    }

    public function showRegister() {
        echo Controller::getTwig()->render('register.html.twig');
    }
}

?>