<?php

class dbconnection
{
    private $host = 'localhost';
    private $dbname = 'cafe';
    private $user = 'root';
    private $senha = '';
    private $pdo;

    public function __construct()
    {
        try{
            $this->pdo = new PDO()
        }
    }
}



?>