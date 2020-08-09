<?php

$condition = true;

while ($condition) {

    $numero = rand(1, 10);

    if($numero === 3){
        echo "Três";
        $condition = false;
    }
    echo "$numero ";
}

?>