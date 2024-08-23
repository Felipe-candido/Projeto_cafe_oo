<?php
require_once ('../classes/class-membro.php');
require_once ('../classes/class_connection.php');
require_once ('../classes/class-crud.php');

echo $_POST['id_editar'];
echo $_POST['nome'];


if (isset($_POST['id_editar'])) {
   
    $id_editar = $_POST['id_editar'];

    if (isset($_POST['nome']) && isset($_POST['semestre']) && isset ($_POST['curso']) && isset($_POST['ano'])){
        $novo_nome = $_POST['nome'];
        $novo_semestre = $_POST['semestre'];
        $novo_curso = $_POST['curso'];
        $novo_ano = $_POST['ano'];

        $connection = new db_query;
        $editar = $connection()->editar_membro($id_editar, $novo_nome, $novo_semestre, $novo_curso, $novo_ano);
        }
}
?>