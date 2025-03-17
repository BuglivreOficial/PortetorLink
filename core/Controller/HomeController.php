<?php

namespace Core\Controller;

use Core\Template\Twig;

class HomeController {

    private $twig;

    public function __construct() {
        $this->twig = new Twig("layout/");
    }
    
    public function index() {
        $this->twig->render("user/index.html", [
            "app_name" => APP_NAME,
        ]);
    }
}