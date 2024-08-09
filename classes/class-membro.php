<?php

class Membro
{
    private $id;
    private $nome;
    private $semestre;
    private $curso;
    private $ano;


    // cria uma instância de membro com todos os dados do formulário
    public function __construct($nome, $semestre, $curso, $ano)
    {
        $this->id = $id; 
        $this->nome = $nome; 
        $this->semestre = $semestre; 
        $this->curso = $curso; 
        $this->ano = $ano; 
    }

    public function exibir_membro($membro)
    {
        echo "$membro->nome";
        echo "$membro->semestre";
        echo "$membro->curso";
        echo "$membro->ano";
    }

    public function get_nome($membro)
    {
        return $membro->nome;
    }

    public function get_semestre($membro)
    {
        return $membro->semestre;
    }

    public function get_curso($membro)
    {
        return $membro->curso;
    }

    public function get_ano($membro)
    {
        return $membro->ano;
    }

    // função para validar todos os dados do cadastro
    // public function validar_cadastro()
    // {
        
    // }
}

?>