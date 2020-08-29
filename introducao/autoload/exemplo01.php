<?php 

//Lê apenas arquivo na mesma pasta
function __autoload($nomeDaClasse){
    require_once("$nomeDaClasse.php");
}

$gol = new Carro();
$gol->acelerar(80); // Não existe o arquivo Automóvel na pasta 

?>