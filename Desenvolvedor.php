<?php

require_once 'Funcionario.php';

class Desenvolvedor extends Funcionario{
    private string $linguagemPrincipal;

    public function __construct($nome, $salario, $linguagemPrincipal){
        parent::__construct($nome, $salario);
        $this->linguagemPrincipal = $linguagemPrincipal;
    }
    public function Programar(){
        echo 'Nome: ' . $this->nome . ' | salario: ' .
        $this->getsalario() . ' | Linguagem Principal: ' . $this->linguagemPrincipal . '<br>';
    }
}