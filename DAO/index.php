<?php

require_once("config.php");

//$claiton = new Usuario();

//Carrega um usuario
//$claiton->loadById(1);

//var_dump($claiton);

//echo "<br>";
//echo "<br>";

//echo $claiton;

//Carrega lista de usuarios
//$lista =  Usuario::getList();
//echo json_encode($lista);

//Carrega lista de usuarios buscando pelo login

//$search = Usuario::search("cl");

//echo json_encode($search);

//Carrega usuario usando o login e senha
//$usuario = new Usuario();
//$usuario->login("claiton","123");

//echo $usuario;


//insert de novo usuario
//$aluno =  new Usuario("aluno","@aluno");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@luno");

//$aluno->insert();

//echo $aluno;

//echo "<br>";

//var_dump($aluno);


// update de usuario
//$usuario = new Usuario();

//$usuario->loadById(4);

//$usuario->update("professor","oloko");

//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(4);

$usuario->delete();

echo $usuario;

?>