<?php
// Camelcase: https://pt.wikipedia.org/wiki/Came
$anoCompleto = 1981;

$nome1 = "Claiton";

$sobrenome = "Cezar";

$nomeCompleto = $nome1 . " " . $sobrenome; //concatena

echo $nomeCompleto;

exit; // para execução do codigo

echo "<br/>";

unset($nome1); // limpa variaveis Unset seria como "desdefinir". Isso significa que essa função deixa a variável sem definição


if (isset($nome1)) { // isset verifica se variavel existe

echo $nome1;	
}
?>