<?php

# herança II

class SuperClasse{
	public $publico = 0;
	private $privada = 0;
	protected $protegido = 0;
	public function super()
	{
		echo "<br>" . $this->publico;
		echo "<br>" . $this->privada;
		echo "<br>" . $this->protegido;
	}
}

class SubClasse extends SuperClasse{
	public $publico;
	private $privada;
	protected $protegido;
	public function sub(int $x)
	{
		$this->publico = $x;
		$this->privada = $x;
		$this->protegido = $x;
	}
}

$sub = new SubClasse();
$sub->sub(1);
$sub->super();