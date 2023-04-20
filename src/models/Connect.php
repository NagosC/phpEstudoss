<?php

namespace src\models;

use PDO;
use PDOException;




class Connect 
{
    private static $instancia;
    
    public static function getInst (): PDO
    {
        if(empty(self::$instancia))
        {
            try{
                self::$instancia = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME,
                DB_USER, DB_PASSWORD, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    PDO::ATTR_AUTOCOMMIT => PDO::CASE_NATURAL
                 ]);
                 
            }
            catch(PDOException $e)
            {
                die("Erro de conexão: ". $e->getMessage());
            }


            return self::$instancia;
        }
    }

    protected function __construct()
    {
        
    }

    private function __clone():void
    {
        
    }
}