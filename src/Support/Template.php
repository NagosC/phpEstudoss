<?php

namespace src\support;

use src\Classes\Helpers;
use Twig\Lexer;

class Template
{
    private \Twig\Environment $twig;

    public function __construct(string $dir)
    {
        $loader = new \Twig\Loader\FilesystemLoader($dir);
        
        $this->twig = new \Twig\Environment($loader);

        $lexer = new Lexer($this->twig, array(
            $this->helpers()
        ));

        $this->twig->setLexer($lexer);
    }

    public function rend(string $view, array $data):string
    {
        return $this ->twig->render($view, $data);

       
    }

    private function helpers():void
    {
        array(
            $this->twig->addFunction(new \Twig\TwigFunction('url',
             function(string $url = null)
            {
                return Helpers::url($url);
            })
        ),
            $this->twig->addFunction(new \Twig\TwigFunction('hi', function()
            {
                return Helpers::oi();
            })
        )
        
        );
    }
}