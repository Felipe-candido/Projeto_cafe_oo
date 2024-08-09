<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class db_query
{
    private $connection;

    // FUNÇÃO PARA INSERIR OS DADOS NO BANCO
    public function insert_membro($nome, $semestre, $curso, $ano, $membro)
    {
        // cria a conexão com o banco de dados
        $connection = new dbconnection;

        $novo_membro = new membro($nome, $semestre, $curso, $ano);
        
        $nome1 = $membro->get_nome($membro);
        $semestre1 = $membro->get_semestre($membro);
        $curso1 = $membro->get_curso($membro);
        $ano1 = $membro->get_ano($membro);
        $id1 = 1;
        

        $query = $connection->connect()->prepare('INSERT INTO membros (id, nome, semestre, curso, ano) VALUES (:id, :nome, :semestre, :curso, :ano)');
        $query->bindParam(':id', $id1);
        $query->bindParam(':nome', $nome1);
        $query->bindParam(':semestre', $semestre1);
        $query->bindParam(':curso', $curso1);
        $query->bindParam(':ano', $ano1);
        $query->execute();
    }


    // FUNÇÃO PARA PEGAR O ULTIMO ID A FIM DE INCREMENTAR PARA O PROXIMO MEMBRO
    public function select_id()
    {
        $connection = new dbconnection;
        $query = $connection->connect()->prepare('SELECT id FROM membros ORDER BY id desc LIMIT 1');
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }



}

?>