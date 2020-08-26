<?php

abstract class Animal{

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Andar";
    }

}

class Gato extends Animal{
    public function falar(){
        return "Miau...";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "Auau...";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Piupiu...";
    }
    public function mover(){
        return "Voa e ". parent::mover(); //Função herdade do pai
    }
}

$gato = new Gato();
echo $gato->mover() ."<br/>";
echo $gato->falar() ."<br/>";

echo "..........................<br/>";
$cachorro = new Cachorro();
echo $cachorro->mover() ."<br/>";
echo $cachorro->falar() ."<br/>";

echo "..........................<br/>";
$passaro = new Passaro();
echo $passaro->mover() ."<br/>";
echo $passaro->falar() ."<br/>";

?>