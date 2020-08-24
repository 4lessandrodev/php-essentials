<?php

class Pessoa{
    public $nome;

    public function falar(){
        return "O meu nome é " . $this->nome;
    }
}

$aluno = new Pessoa();

$aluno->nome = "Alessandro";

echo $aluno->falar();
?>