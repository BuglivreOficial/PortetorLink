<?php

namespace Core\Template;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

use Core\Template\Extension\StringExtension;

class Twig
{


    private $twig;

    public function __construct($dir)
    {
        $loader = new FilesystemLoader(__DIR__ . "/../../" . $dir);
        $this->twig = new Environment($loader);
    }

    private function extesion()
    {
        //Lista de extensões
        $extensoes = [
            new StringExtension()
        ];

        //Registrar todas as extensões automaticamente 
        foreach ($extensoes as $extensao) {
            $this->twig->addExtension($extensao);
        }
    }

    public function render($template, $data = [])
    {
        $this->extesion();
        echo $this->twig->render($template, $data);
    }
}
