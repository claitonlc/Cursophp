<?php

$json = '[{"nome":"Claiton","idade":20},{"nome":"Cezar","idade":20}]';

$data = json_decode($json, true); //usar true senão vira objeto

var_dump($data);

?>