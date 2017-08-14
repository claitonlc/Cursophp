<?php
require_once("config.php");

$root = new Usuario();

$root->loadById(5);

var_dump($root);
echo "<br>";
echo "<br>";

echo $root;

?>