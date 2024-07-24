<?php

class dbconnection
{
    
    private $conexao;

    public function connect()
    {
        try{
            $user = 'root';
            $senha = '';
            $this->conexao = new PDO("mysql:host=localhost;dbname=cafe;", $user, $senha);
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