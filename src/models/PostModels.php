<?php

namespace src\models;

use src\models\Connect;
use Exception;


class PostModels
{
    public array $error = [];



    public function readAll(): array | object
    {
        try {
            $query = "SELECT id, stats, text, title FROM posts";

            $stmt = Connect::getInst()->query($query);

            $result = $stmt->fetchAll();

            return $result;
        } catch (Exception $e) {
            die('Erro de conexão' . $e->getMessage());
        }
    }

    public function readOne(int $id): bool | object
    {
        try {
            $query = "SELECT id, stats, text, title FROM posts WHERE id = {$id}";

            $stmt = Connect::getInst()->query($query);

            $result = $stmt->fetch();


            return $result;
        } catch (Exception $e) {
            die('ID não encontrado ou incorreto' . $e->getMessage());
        }
    }
}