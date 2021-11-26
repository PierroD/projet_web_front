<?php 

namespace App\Controllers;

use App\Services\authService;

class weatherController {

    protected authService $authService;

    public function __construct(authService $authService)
    {
        $this->authService = $authService;
    }

    public function show() {
        if($this->authService->isAuth()) {
            echo Controller::getTwig()->render('dashboard.html.twig', ['user' => [
                'name' => $this->authService->getUser()["name"],
                'city' => $this->authService->getUser()["city"],
                'isAuth' => $this->authService->getUser()["isAuth"],
            ]]);    
        } else {
            header('Location: /login');
        }
    }

}