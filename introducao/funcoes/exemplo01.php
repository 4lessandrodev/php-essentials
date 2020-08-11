<?php

function somar($a, $b){
    return $a + $b;
}

echo somar(10, 20);
echo "<br>";

function argumentos(){
    $argumentosDaFuncao = func_get_args();
    return $argumentosDaFuncao;
}

var_dump(argumentos("Ola", "Recebeu", "Todos os argumentos?", 10 , 20));

?>