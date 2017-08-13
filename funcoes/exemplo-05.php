<?php 

$a = 10;
function trocaValor(&$b){ //quanto tem & épassagem de parametro por referencia o que acontece na função muda na variavel tb.

	$b += 50;
	return $b;
}
	echo trocaValor($a);
	echo "<br>";
	echo $a;


 ?>