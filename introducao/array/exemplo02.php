<?php

$pessoas = array();

array_push($pessoas, array(
    'nome'=> 'Alessandro',
    'idade'=> 27
));

array_push($pessoas, array(
    'nome'=> 'Aline',
    'idade'=> 21
));

// print_r($pessoas);
// echo "<br>";

// print_r($pessoas[0]['nome']);

echo json_encode($pessoas);

?>