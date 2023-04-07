<?php
// index do sistema gerencia tudo 

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

$text = "<h1>Texto</h1> <p>para</p> resumir";

echo resumeText($text, 15);