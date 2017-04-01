<?php

# funções de acesso

class Pessoa
{
	private $nome;
	private $sobrenome;

	public function getNome() : string
	{
		return $this -> nome;
	}
	public function setNome(string $nome)
	{
		$this->nome = $nome;
	}
	public function getSobrenome() : string
	{
		return $this->sobrenome;
	}
	public function setSobrenome(string $sobrenome)
	{
		$this->sobrenome = $sobrenome;
	}

	public function getNomeCompleto() : string
	{
		return $this->getNome() . " " . $this->getSobrenome();
	}
}

$p1 = new Pessoa();
$p1 -> setNome("eXcript");
$p1 -> setSobrenome("Brasil");

//echo "<br>" . $p1->getNome();
//echo "<br>" . $p1->getSobrenome();

echo $p1->getNomeCompleto();

