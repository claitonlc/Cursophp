<?php
$nome =(int)$_GET["a"]; //converte para inteiro fazendo cast

//var_dump($nome);
 
//$ip = $_SERVER["REMOTE_ADDR"]; // pega IP do usuario

$ip = $_SERVER["SCRIPT_NAME"]; //mostra caminho do arquivo
echo $ip;
?>