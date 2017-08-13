<?php
class Carro {
 
  private $VarAAAAA;
 
  public function setModelo($VarBBBBB) {
      $this->VarAAAAA = $VarBBBBB;
  }
 
  public function getModelo() {
      return $this->VarAAAAA;
  }
}
 
$obj = new Carro;
$obj->setModelo("Golf");
echo $obj->getModelo(); //imprime "Golf"
?>