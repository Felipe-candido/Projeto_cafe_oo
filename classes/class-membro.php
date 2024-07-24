<?php

class Membro
{
    private $id;
    private $nome;
    private $semestre;
    private $curso;
    private $ano;


    // cria uma instância de membro com todos os dados do formulário
    public function __construct($id, $nome, $semestre, $curso, $ano)
    {
        $this->id = $id; 
        $this->nome = $nome; 
        $this->semestre = $semestre; 
        $this->curso = $curso; 
        $this->ano = $ano; 
    }

    // função para validar todos os dados do cadastro
    // public function validar_cadastro()
    // {
        
    // }
}

?>