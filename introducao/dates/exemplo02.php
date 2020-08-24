<?php

$timestamp = strtotime('2001-09-11');
$agora = strtotime('now');
$amanha = strtotime('+1 day');
$semanaseguinte = strtotime('+1 week');
$horaseguinte = strtotime('+1 hour');

echo '<br>';
echo date("l, d/m/Y", $timestamp);
echo '<br>';
echo date("l, d/m/Y H:i:s", $agora);
echo '<br>';
echo date("l, d/m/Y", $amanha);
echo '<br>';
echo date("l, d/m/Y", $semanaseguinte);
echo '<br>';
echo date("l, d/m/Y H:i:s", $horaseguinte);
?>