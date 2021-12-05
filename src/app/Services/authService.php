<?php

namespace App\Services;

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
    public function getUserCity() {
        return $_SESSION["user"]["city"];
    }

    public function isAuth() {
        return $_SESSION["user"]["isAuth"];
    }
}

?>