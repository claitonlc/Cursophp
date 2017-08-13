<?php 

function ola($texto="Mundo", $periodo= "Bom dia"){

	return "ola $texto! $periodo!<br>";
}
	echo ola();

	echo ola("Claiton");
	echo ola("Claiton","");
	echo ola("Claiton","tudo bem?");

 ?>