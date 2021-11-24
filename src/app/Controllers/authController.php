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
        $object = $_POST;
    }

    public function login() {
        $object = $_POST;
        $this->authService->setUser($object["username"], "Lyon", true); 
    }

}

?>