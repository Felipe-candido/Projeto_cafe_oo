<?php

class dbconnection
{
    private $host = 'localhost';
    private $dbname = 'cafe';
    private $user = 'root';
    private $senha = '';
    private $conexao;

    public function connect()
    {
        try{
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname;",$this->user,$this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        catch(PDOException $e){
            echo $e->getMessage();
        }

        return $this->conexao;
    }

    public function desconnect()
    {
        $this->conexao = NULL;
    }
}

?>