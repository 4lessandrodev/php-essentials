<?php 

function __autoload($nomeDaClasse){
    require_once("$nomeDaClasse.php");
}

$gol = new Carro();
$gol->acelerar(80);

?>