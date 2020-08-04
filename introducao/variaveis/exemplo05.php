<?php

$usuario = "Alessandro";

function teste(){
    global $usuario;
    var_dump($usuario);
}

function testeB(){
    var_dump($usuario . " na função B");
}

teste();
testeB();

?>