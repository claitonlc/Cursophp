<?php
    
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {

        //VERIFICA CAPTCHA
        $recaptcha_secret = "6Le61y0UAAAAANmm6_RJsyWYSS1WRHCdM5W6Vs0B";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        $response = json_decode($response, true);
        if($response["success"] === true)
        {
            echo "E-mail Cadastrado com Sucesso!";
        }
        else
        {
            echo "Você é um Robô, somente é permitido humanos!";

            echo "<meta http-equiv=refresh content='3;URL=exemplo-04.php'>";

        }
    }
    ?>



