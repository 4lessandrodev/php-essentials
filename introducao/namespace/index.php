<?php

require_once("config.php");
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@mail.com");
$cad->setSenha("KJSDKFLW66578W9");
$cad->registrarVenda();

echo $cad;

?>