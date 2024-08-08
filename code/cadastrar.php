<?php
require_once ('../classes/class-membro.php');
require_once ('../classes/class_connection.php');
require_once ('../classes/class-crud.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // COMANDOS PARA RECEBER OS DADOS DO FORMULÁRIO E ATRIBUÍ-LOS A UMA VARIÁVEL //

    // $id = $_POST['id'];
    $nome = $_POST['nome'];
    $semestre = $_POST['semestre'];
    $curso = $_POST['curso'];
    $ano = $_POST['ano'];

    $novo_membro = new Membro($nome, $semestre, $curso, $ano);
    $query = new db_query;
    $query->insert_membro($nome, $semestre, $curso, $ano, $novo_membro);

    $novo_membro->exibir_membro($novo_membro);
}else{
    header('index.php');
}

?>