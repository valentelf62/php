<?php

#implementando funções

class Pessoa{

	public $idade = 0;

	public function get_idade(){

		return $this -> idade;
	}

	public function set_idade($idade){
		if ($idade>0) {
			$this -> idade = $idade;
		}else{
			echo "A idade informada é inválida.";
		}
	}
}

$p1 = new Pessoa();
$p1 -> set_idade(22);
echo "<br>A idade é: {$p1 -> get_idade()}";
$p1 -> set_idade(10);
echo "<br>A idade é: {$p1 -> get_idade()}";
$p1 -> set_idade(-5);
echo "<br>A idade é: {$p1 -> get_idade()}";