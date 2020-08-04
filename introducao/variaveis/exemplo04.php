<?php
$nome = (int)$_GET["idade"];
var_dump($nome);

//Capturar o ip
$ip = $_SERVER["REMOTE_ADDR"];
var_dump($ip);

//Rota 
$route = $_SERVER["SCRIPT_NAME"];
var_dump($route);
?>