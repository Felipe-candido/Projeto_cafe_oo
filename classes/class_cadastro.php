<?php

class cadastro
{
    private $nome;
    private $semestre;
    private $curso;
    private $ano;
    private $conexao;

    function __construct()
    {
        $conexao = new dbconnection;
        $conexao -> connect();
    }

    public function setNome ($nome, $conexao)
    {
        
    }
}

?>