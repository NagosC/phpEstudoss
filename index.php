<?php
// index do sistema gerencia tudo 
require_once 'sistema/configuracao.php';
include_once 'helpers.php';
include './sistema/Class/Mensagem.php';

$msg = new Mensagem();
echo $msg->render();
echo '<hr>';
var_dump($msg);