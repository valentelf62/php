<?php

#encapsulamento

class Pessoa
{

	private $nome;

	function setNome($nome)
	{
		$this -> nome = $nome;
	}

	function getNome()
	{
		return $this -> nome;
	}
}

$p1 = new Pessoa();

$p1 -> setNome("eXcript");

//$p1 -> nome = "dfas";