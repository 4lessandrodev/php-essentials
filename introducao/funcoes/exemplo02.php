<?php

$total = 0;

//& passa a referencia da variavel 
function referenciaDeVariavel(&$total, $a, $b){
    $total = $a + $b;
}

echo $total. "<br>";
referenciaDeVariavel($total, 10, 30);
echo $total. "<br>";;
referenciaDeVariavel($total, 5, 2);
echo $total. "<br>";;

?>