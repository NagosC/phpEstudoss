<?php

namespace src\controllers;
use src\support\Template;

class Controller
{
    protected Template $template;
    
    public function __construct(string $dir)
    {
        $this->template = new Template($dir);
    }
}