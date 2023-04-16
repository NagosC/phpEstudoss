<?php

namespace src\support;

class Template
{
    private \Twig\Environment $twig;

    public function __construct(string $dir)
    {
        $loader = new \Twig\Loader\FilesystemLoader($dir);
        
        $this->twig = new \Twig\Environment($loader);
    }

    public function rend(string $view, array $data)
    {
        return $this ->twig->render($view, $data);
    }
}