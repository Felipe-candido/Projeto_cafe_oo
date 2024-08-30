<?php
require_once ('../classes/class-membro.php');
require_once ('../classes/class_connection.php');
require_once ('../classes/class-crud.php');


if(isset($_POST['id_apagar'])){
    $query = new db_query;
    $query->delete_membro($_POST['id_apagar']);
    header('location: index.php');
}
else{
    echo "falha ao apagar membro";
}
?>