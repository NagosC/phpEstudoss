<?php

namespace src\controllers;

use src\controllers\Controller;
use src\models\PostModels;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct('src/views/html/');
    }

    public function index(): void
    {
        $post = (new PostModels)->readAll();

        echo $this->template->rend('home.html', [
            'posts'=>$post
        ]);
    }

    public function error(): void
    {
        echo $this->template->rend('404.html', [
            'titulo' => 'Página não encontrada'
        ]);
    }


}