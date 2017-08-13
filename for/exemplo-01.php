<?php

for ($i =0; $i <= 1000; $i+=5){

	if($i >= 200 && $i <= 800) continue; // se tiver somente um if não precisa chaves

	if($i === 900) break;

	echo $i ."<br>";
}


?>