<?php

use Pecee\SimpleRouter\SimpleRouter;


SimpleRouter::setDefaultNamespace('src\controllers');

SimpleRouter::get(URL_SITE.'home/', 'HomeController@index');

SimpleRouter::start();