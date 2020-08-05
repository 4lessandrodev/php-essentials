<?php 


$empresa = 'HCODE';

$empresa = str_replace("O", "0", $empresa);
$empresa = str_replace("E", "3", $empresa);

echo $empresa;
echo "<br>";
$frase = "O amor é fogo que arde sem se ver";
$palavraProcurada = "fogo";
$posicao = strpos($frase, $palavraProcurada);
$textoApos = substr($frase, $posicao + strlen($palavraProcurada), strlen($frase));
$textoAntes = substr($frase, 0, $posicao);

echo "texto antes: $textoAntes";
echo "<br>";
echo "palavra de corte: $palavraProcurada";
echo "<br>";
echo "texto apos: $textoApos";


?>