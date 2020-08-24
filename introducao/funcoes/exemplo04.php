<?php 

//Dentro do paranteses é possível determinar o tipo de dados será recebido
//Apos os parenteses é possível determinar o tipo de dado será retornado
function soma(float ...$valores):float{
    return array_sum($valores);
};

echo soma(1, 3, 4, 1.5); //9.5
echo "<br>";
echo var_dump(soma(1.2, 1.5)) //float 2.7
?>