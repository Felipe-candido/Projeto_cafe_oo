<?php

class db_query
{
    private $connection;

    public function insert_membro($nome, $semestre, $curso, $ano, $membro)
    {
        // cria a conexão com o banco de dados
        $connection = new dbconnection;

        $novo_membro = new membro($nome, $semestre, $curso, $ano);
        
        $nome1 = $membro->get_nome($membro);
        $semestre1 = $membro->get_semestre($membro);
        $curso1 = $membro->get_curso($membro);
        $ano1 = $membro->get_ano($membro);
        

        $query = $connection->connect()->prepare('INSERT INTO membros (nome, semestre, curso, ano) VALUES (:nome :semestre, :curso, :ano)');
        // $query->bindParam(':id', $membro->id);
        $query->bindParam(':nome', $nome1);
        $query->bindParam(':semestre', $semestre1);
        $query->bindParam(':curso', $membro1);
        $query->bindParam(':ano', $ano1);
        $query->execute();
    }
}

?>