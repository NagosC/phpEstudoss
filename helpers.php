<?php 

function hi(): string
{
    $hora = date('H');
    
    if($hora>= 0 && $hora <= 5) {
        $saudacao = 'boa madrugada';     
    }
    elseif ($hora >= 6 && $hora < 12) {
        $saudacao = 'Boa manha';
    }
    elseif ($hora >= 13 && $hora < 18) {
        $saudacao = 'Boa tarde';
    }
    else {
        $saudacao = 'Boa noite';
    }
    
    return $saudacao;
}

function resumeText(string $text, int $limit, string $continue = '...'): string
{
   $cleanText = trim(strip_tags($text));
   
   if(mb_strlen($cleanText) <= $limit){
    return $cleanText;
   }

   $Cuttext = mb_substr($cleanText, 0 , mb_strrpos(mb_substr($cleanText, 0 , $limit), ''));

   return $Cuttext.$continue;
}