<?php

namespace src\controllers;

use src\controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct('src/views/home');
    }

    public function index():void
    {
        echo $this->template->rend('home.html', [
            'titulo' => 'teste'
        ]); 
    }
}