<?php
$nome = "Claiton";

function teste() {

	global $nome;
	echo $nome;
}

function teste2() {
    $nome = "Cezar";
    echo "<br/>";
	echo $nome. " agora no teste2";

}
teste();
teste2();
?>