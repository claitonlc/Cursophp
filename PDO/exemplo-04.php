<?php  

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin=:LOGIN, dessenha=:PASSWORD WHERE idusuario=:ID");
$id = 1;
$login = "claiton";
$password = "123";

$stmt->bindParam(":ID", $id);
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Dados Alterados!!";

//var_dump($results);


?>