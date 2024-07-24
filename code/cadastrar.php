<?php
require_once ('./classes/class-membro.php');
require_once ('./classes/class_connection.php');
require_once ('./classes/class-queries-sql.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
$id = $_POST['id'];
$nome = $_POST['nome'];
$semestre = $_POST['semestre'];
$curso = $_POST['curso'];
$ano = $_POST['ano'];

$novo_membro = new Membro($id, $nome, $semestre, $curso, $ano);
$query = new db_queries;
$query->insert_membro($novo_membro);

}else{
    header('index.php');
}

?>