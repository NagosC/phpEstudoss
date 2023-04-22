<?php
use Pecee\SimpleRouter\SimpleRouter;

use src\Classes\Helpers;

try{

    SimpleRouter::setDefaultNamespace('src\controllers');

    //home
    SimpleRouter::get('/', 'HomeController@index');


    //sobre 
    SimpleRouter::get('sobre/', 'SobreController@index');

    //error 
    SimpleRouter::get('error/', 'HomeController@error');

    //post 
    SimpleRouter::get('post/{id}','PostController@index');



    
    SimpleRouter::start();
    
} catch(\Pecee\SimpleRouter\Exceptions\NotFoundHttpException $e) {
    if(Helpers::localhost()) {
        echo $e;
    }
    else {
        Helpers::redirect('error');
    }
}