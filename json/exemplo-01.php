<?php

$pessoas = array();

array_push($pessoas, array('nome'=>'Claiton', 'idade'=>20));

array_push($pessoas, array('nome'=>'Cezar','idade'=>20));

echo json_encode($pessoas);

?>