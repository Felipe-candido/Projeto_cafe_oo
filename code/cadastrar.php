<?php
require_once ('../classes/class-membro.php');
require_once ('../classes/class_connection.php');
require_once ('../classes/class-crud.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // COMANDOS PARA RECEBER OS DADOS DO FORMULÁRIO E ATRIBUÍ-LOS A UMA VARIÁVEL //
    $query_id = new db_query;
    $result = $query_id->select_id();

    if (!$result){
        $id = 1;
    }
    else{
        $id = $result['id'] + 1;
    }


    //COMANDO PARA IDENTIFICAR OS CURSOS
    $aux = $_POST['curso'];
    switch ($aux) {
        case '1':
            $curso = "DSM";
            break;

        case '2':
            $curso = "GE";
            break;


        case '3':
            $curso = "SI";
            break;
    }

    $nome = $_POST['nome'];
    $semestre = $_POST['semestre'];
    $ano = $_POST['ano'];


    $novo_membro = new Membro($id, $nome, $semestre, $curso, $ano);
    $query = new db_query;
    $query->insert_membro($id, $nome, $semestre, $curso, $ano, $novo_membro);

    $novo_membro->exibir_membro($novo_membro);
}else{
    header('index.php');
}

?>