<?php

class Mensagem
{
    private $texto;
    private $css;

    public function render(): string
    {
       return $this->texto = $this ->filter('teste');
    }

    private function filter(string $msg): string
    {
        return filter_var(strip_tags($msg), FILTER_SANITIZE_SPECIAL_CHARS);
    }
}