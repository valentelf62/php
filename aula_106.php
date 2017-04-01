<?php

#visibilidade das funções

class SuperClasse
{

	public function funcPublica()
	{
		echo "<br>funcPublica";
	}
	protected function funcProtegida()
	{
		echo "<br>funcProtegida";
	}
	private function funcPrivada()
	{
		echo "<br>funcPrivada";
	}
	function super()
	{
		$this->funcPublica();
		$this->funcProtegida();
		$this->funcPrivada();
	}
}

//$super = new SuperClasse();
//$super->super();
//$super->funcPublica();
//$super->funcProtegida();
//$super->funcPrivada();

class SubClasse extends SuperClasse
{
	function __construct()
	{
		$this->funcPublica();
		$this->funcProtegida();
//		$this->funcPrivada();
	}
}

$sub = new SubClasse();
$sub->funcPublica();