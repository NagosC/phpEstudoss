<?php
namespace src\controllers;
use src\controllers\Controller;

class SobreController extends Controller
{
    public function __construct()
    {
        parent::__construct('src/views/html');
    }

    public function index():void
    {
        echo $this->template->rend('sobre.html', [
            'titulo' => 'Olá'
        ]);
    }
}