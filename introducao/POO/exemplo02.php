<?php

class Carro{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getMotor(){
        return $this->motor;
    }

    public function setMotor(float $motor){
        $this->motor = $motor;
    }

    public function getAno(){
        return $this->ano;
    }

    public function setAno(int $ano){
        $this->ano = $ano;
    }

    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}


$carro = new Carro();
$carro->setAno("2017");
$carro->setModelo("GOL");
$carro->setMotor("1.6");

var_dump($carro->exibir());

?>