<?php 

$nome = 'Alessandro';
$linkGithub = "github.com/ALESSANDROLMENEZES";
$anoNascimento = 1989;
$salario = 7535.98;
$usuarioAtivo = true;
/////////////////////////
$skills = array("nodeJS", "css", "mysql", "git", "bootstrap");
echo $skills[0];
echo "<br>";
$dataNascimento = new DateTime();

var_dump($dataNascimento);
echo "<br>";

$arquivo = fopen("exemplo03.php", "r");

var_dump($arquivo);

$nulo = NULL;
$vazio = "";

?>