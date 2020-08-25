<?php 
//As classes filhas acessas as classes PAI, 
//Classes PAI não acessas a classe filha

class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($n){
        $this->numero = $n;
    }

}

//Cpf é classe filha de Documento 
class Cpf extends Documento {

    public function validarNumero():bool{
        $numeroCPF = $this->getNumero();
        //Validar numero 
        return true;
    }

}

$doc = new Cpf();
$doc->setNumero("13489892200");
var_dump($doc->validarNumero());

?>