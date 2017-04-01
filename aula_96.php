<?php

#implementando funções

class Pessoa{

	public $idade = 6;

	public function get_idade(){

		return $this -> idade;
	}
}

$p1 = new Pessoa();
echo $p1 -> get_idade();