	<?php 
	class Pessoa {

		public $nome; //Atributo

		public function falar(){ //Método

			return "O meu nome é : " .$this->nome;
		}

	}
$claiton =  new Pessoa();
$claiton->nome = "Claiton Londero";
echo $claiton->falar();

	 ?>