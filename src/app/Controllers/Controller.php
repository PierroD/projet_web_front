<?php

namespace App\Controllers;

final class Controller {

    private static $twig;
    private static $loader;

    public static function getTwig() {
        if(self::$twig == null) {
           self::buildTwig();
        }
       return self::$twig;
    }

    private static function buildTwig() {
        self::$loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__, 2). '/public_html/Views');
        self::$twig = new \Twig\Environment(self::$loader, [
            'cache' => false,
        ]);
    }
}