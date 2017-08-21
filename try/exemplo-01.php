<?php

try {

    throw new Exception("Ocorreu um erro! ", 400);
    
} catch (Exception $e ) { // usa-se a letra "e" por convenção.

    echo json_encode(array(
         "message"=>$e->getMessage(),
         "line"=>$e->getLine(),
         "file"=>$e->getFile(),
         "code"=>$e->getCode()
          ));
}

?>