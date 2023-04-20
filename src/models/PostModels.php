<?php

namespace src\models;

use src\models\Connect;

class PostModels
{
    public function read(): array
    {
        $query = "SELECT * FROM `posts`";
        
        $stmt = Connect::getInst() -> query($query);
        
        $result = $stmt->fetchAll();

        return $result;
        
    }
}