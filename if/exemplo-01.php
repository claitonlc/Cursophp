<?php
$qualASuaIdade = 15;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if($qualASuaIdade < $idadeCrianca){

	echo "Criança";

} else if ($qualASuaIdade < $idadeMaior){ //pode ser elseif tudo junto ou separado não altera em nada

	echo "Adolescente";

} else if ($qualASuaIdade < $idadeMelhor){

	echo "Adulto";
} else {


	echo "Idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)? "Menor de idade":"mMior de idade"; //ternario

?>