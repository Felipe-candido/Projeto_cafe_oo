<?php
require_once ('../classes/class-membro.php');
require_once ('../classes/class_connection.php');
require_once ('../classes/class-crud.php');

if (isset($_POST['id_editar'])) {
    $id_editar = $_POST['id_editar'];
    echo $id_editar;
} else {
    echo "ID não recebido.";
}

// header("location: index.php");
?>