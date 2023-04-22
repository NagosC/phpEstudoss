<?php
namespace src\controllers;
use src\controllers\Controller;
use src\models\PostModels;
use src\Classes\Helpers;


class PostController extends Controller
{
    public function __construct()
    {
        parent::__construct('src/views/html');
    }

    public function index(int $id):void
    {
        $post = (new PostModels())->readOne($id);

        if(!$post)
        {
            Helpers::redirect('error/');
        }
        
        echo $this->template->rend('post.html',[
            'post' => $post
        ]);
    }
}