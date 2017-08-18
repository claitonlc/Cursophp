<?php
$file = "images";

if(!is_dir($file))
  {
  mkdir($file);

  echo ("Diretorio: $file criado com sucesso!");
  }
else
  {
  rmdir($file);	
  echo ("Diretorio: $file , ja existe e foi removido! ");
  }
?>