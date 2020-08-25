<?php 


class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($n){
        $this->numero = $n;
    }

}


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