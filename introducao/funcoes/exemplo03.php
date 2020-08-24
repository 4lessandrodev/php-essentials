<?php 

function soma(int ...$valores){
    return array_sum($valores);
};

echo soma(1, 3, 4, 1.5); //9
echo "<br>";
echo soma(1.2, 1.5) //2
?>