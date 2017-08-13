	<?php 
	date_default_timezone_set('America/Sao_Paulo');
	setlocale(LC_ALL, "pt_br", "pt_BR.utf-8", "portuguese");
	echo ucwords(strftime("%A %B"));

	$dataHoje = ucwords(strftime('%A, %d de %B de %Y', strtotime('today')));
	echo "<br>";
 
    echo $dataHoje;

	 ?>