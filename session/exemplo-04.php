<?php 

require 'config.php';

session_regenerate_id(); //gera outro id de sessão

echo session_id();

echo("<br>");

var_dump($_SESSION);



?>