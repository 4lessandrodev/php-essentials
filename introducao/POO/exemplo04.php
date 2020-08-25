<?php

class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($valor){
        $resultadoValidacao = Documento::validarNumero($valor);
        if($resultadoValidacao === false){
            throw new Exception("O valor é obrigatório", 1);
        }
        $this->numero = $valor;
    }

    public static function validarNumero($numero):bool{
        if(empty($numero)) return false;
    }
}

?>