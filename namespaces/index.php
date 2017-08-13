<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Claiton Londero");
$cad->setEmail("claitonlc@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

?>
