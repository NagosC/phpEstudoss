<?php
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('src\controllers');

//home
SimpleRouter::get('home/', 'HomeController@index');


//sobre 
SimpleRouter::get('sobre/', 'SobreController@index');

SimpleRouter::start();