<?php

$cep = "88117130";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data); 

//print_r($data["LOCALIDADE"]); - ARRAY SE QUISER VER SO A CIDADE PEGA A CHAVE [LOCALIDADE]
?>