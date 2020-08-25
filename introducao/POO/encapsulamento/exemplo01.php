<?php

class Pessoa {
    
    public $nome = "Rasmus Lerdorf";
    private $senha = "123456"; //Pode ser acessado somente pelos metodos internos da classe
    protected $idade = 48; //Pode ser acessado pelos metodos internos da própria classe ou por quem herdar a classe
    
    public function verDados(){
        return array(
            'nome' => $this->nome, 
            'senha' => $this->senha, 
            'idade' => $this->idade);
        }
    }


    $p = new Pessoa();
    print_r($p->verDados());

    echo "<br>";

    echo $p->nome ."<br>";
    echo $p->senha ."<br>"; //Erro
    echo $p->idade ."<br>"; //Erro

?>