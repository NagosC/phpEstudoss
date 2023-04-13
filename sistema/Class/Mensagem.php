<?php

class Mensagem
{
    private $texto;
    private $css;
    
    public function success(string $msg): string
    {
        $this->css = 'alert alert-success';
        $this->texto = $this->filter($msg);
        return $this->render($this->css, $this->texto);        
    }
    
    public function error(string $msg): string
    {
        $this->css = 'alert alert-danger';
        $this->texto = $this->filter($msg);
        return $this->render($this->css, $this->texto);        
    }
    
    public function warning(string $msg): string
    {
        $this->css = 'alert alert-warning';
        $this->texto = $this->filter($msg);
        return $this->render($this->css, $this->texto);        
    }

    private function render(string $css, string $texto): string
    {
       return "<div class='{$css}'> {$texto}</div>";
    }

    private function filter(string $msg): string
    {
        return filter_var(strip_tags($msg), FILTER_SANITIZE_SPECIAL_CHARS);
    }
}