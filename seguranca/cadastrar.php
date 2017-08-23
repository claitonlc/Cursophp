<?php

$email = $_POST["inputEmail"];

//var_dump($_POST);
 
 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

 curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
 	"secret="=>"6Le61y0UAAAAANmm6_RJsyWYSS1WRHCdM5W6Vs0B",
 	"response"=>$_POST["g-recaptcha-response"],
 	"remoteip"=>$_SERVER["REMOTE_ADDR"]
 	)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

//var_dump($recaptcha);

if ($recaptcha["success"] === true){

	echo "OK: " .$_POST["inputEmail"];

} else {

   echo "Você é um Robô, somente é permitido humanos!";

   echo "<meta http-equiv=refresh content='3;URL=exemplo-04.php'>";
}

?>

