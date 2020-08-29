<?php 


function carregarClasses($nomeDaClasse){
    if(file_exists("$nomeDaClasse.php")){
        require_once("$nomeDaClasse.php");
    }
}

spl_autoload_register("carregarClasses");
spl_autoload_register(function($nomeDaClasse){
    if(file_exists("abstratas". DIRECTORY_SEPARATOR .$nomeDaClasse .".php")){
        require_once("abstratas".DIRECTORY_SEPARATOR.$nomeDaClasse.".php");
    }
});

$honda = new Carro();

$honda->acelerar(120);

?>