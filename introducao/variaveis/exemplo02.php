<?php
$nome = 'Alessandro';
$sobrenome = "Menezes";
$nomeCompleto = $nome . ' ' . $sobrenome;
echo "<br>";
echo $nomeCompleto;
echo "<br>";

//Parar a execução do código 
exit;
echo $nome;
unset($nome);

//Check if the variable exists
if(isset($nome)){
    echo $nome;
};

?>