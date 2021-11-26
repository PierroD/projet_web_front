<?php

namespace App\Services;

use authServiceInterface;

class authService {

    private $user;

    public function setUser($name, $city, $isAuth) {
        $this->user["name"] = $name;
        $this->user["city"] = $city;
        $this->user["isAuth"] = $isAuth;
        $_SESSION["user"] = $this->user;
    }

    public function getUser() {
        return $_SESSION["user"];
    }

    public function isAuth() {
        return $_SESSION["user"]["isAuth"];
    }
}

?>