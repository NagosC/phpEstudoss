<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<?php
// index do sistema gerencia tudo 
require_once 'sistema/configuracao.php';
include_once 'helpers.php';
include './sistema/Class/Mensagem.php';



$msg = new Mensagem();
echo $msg->success('aaaaa');
echo '<hr>';
echo $msg->error('HAHAHAHA');
echo '<hr>';
echo $msg->warning('TTTTTT');

echo '<hr>';
var_dump($msg);