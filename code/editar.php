<?php
require_once ('../classes/class-membro.php');
require_once ('../classes/class_connection.php');
require_once ('../classes/class-crud.php');

if (isset($_POST['id_editar'])) {
   
    $id_editar = $_POST['id_editar'];

    if (isset($_POST['nome']) && isset($_POST['semestre']) && isset ($_POST['curso']) && isset($_POST['ano'])){
        $connection = new db_query;
        $editar = $connection()->connect()->param
        }
}
?>