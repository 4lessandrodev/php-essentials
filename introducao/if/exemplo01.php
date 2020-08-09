<?php

$qualSuaIdade = 17;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca) {
    echo "Criança";

}else if($qualSuaIdade < $idadeMaior){
    echo "Adolecente";

}else if($qualSuaIdade < $idadeMelhor){
    echo "Adulto";

}else{
    echo "Melhor idade";

}

echo "<br>";

echo ($qualSuaIdade >= 18)? "Pode dirigir":"Ainda não tem idade para dirigir";

?>