<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class db_query
{
    private $connection;

    // FUNÇÃO PARA INSERIR OS DADOS NO BANCO
    public function insert_membro($membro)
    {
        // cria a conexão com o banco de dados
        $connection = new dbconnection;
        
        $id1 = $membro->get_id($membro); 
        $nome1 = $membro->get_nome($membro);
        $semestre1 = $membro->get_semestre($membro);
        $curso1 = $membro->get_curso($membro);
        $ano1 = $membro->get_ano($membro);
        

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


    // FUNÇÃO PARA EXIBIR MEMBROS
    public function exibir_participantes($id){

        $connection = new dbconnection;
        $query = $connection->connect()->prepare('SELECT id, nome, semestre, curso, ano FROM membros WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }


    // FUNÇÃO PARA EDITAR MEMBROS ATRAVÉS DO ID
    public function editar_membro($id, $novo_nome, $novo_semestre, $novo_curso, $novo_ano){
        $connection = new dbconnection;
        $query = $connection->connect()->prepare('UPDATE membros SET nome = :nome, semestre = :semestre, curso = :curso, ano = :ano WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->bindParam(':nome', $novo_nome);
        $query->bindParam(':semestre', $novo_semestre);
        $query->bindParam(':curso', $novo_curso);
        $query->bindParam(':ano', $novo_ano);

        $query->execute();
    }



    // FUNÇÃO PARA APAGAR MEMBROS DO BANCO
    public function delete_membro($id){
        $connection = new dbconnection;
        $query = $connection->connect()->prepare('DELETE FROM membros WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
    }
}

?>