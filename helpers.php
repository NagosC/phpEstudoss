<?php 

/**
 * Resume um texto tirando as tags 
 * @param string $texto texto que será modificado
 * @param int $limit quantidade de caracteres
 * @param string $continue opcional - o que deve ser exibido no final do resumo
 * @return string texto resumido e sem tags
 */

function resumeText(string $text, int $limit, string $continue = '...'): string
{
   $cleanText = trim(strip_tags($text));
   
   if(mb_strlen($cleanText) <= $limit){
    return $cleanText;
   }

   $Cuttext = mb_substr($cleanText, 0 , mb_strrpos(mb_substr($cleanText, 0 , $limit), ''));

   return $Cuttext.$continue;
}