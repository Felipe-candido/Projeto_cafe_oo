<?php

class db_queries
{
    private $connection;

    public function insert_membro($membro)
    {
        // cria a conexão com o banco de dados
        $connection = new dbconnection;
        // $connection->connect();

        $query = $connection->connect()->prepare('INSERT INTO membros (id, nome, semestre, curso, ano) VALUES (:id, :nome, :semestre, :curso, :ano)');
        $query->bindParam(':id', $membro->id);
        $query->bindParam(':nome', $membro->nome);
        $query->bindParam(':semestre', $membro->semestre);
        $query->bindParam(':curso', $membro->curso);
        $query->bindParam(':ano', $membro->ano);
        $query->execute();
    }
}

?>