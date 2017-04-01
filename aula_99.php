<?php

#construtures personalizados

class A
{
	
}

class Pessoa{

	public $a;

	public $nome;

	public $idade = 0;

	function __construct($nome, $idade){

		$this -> a = new A();

		$this -> nome = $nome;

		$this -> idade = $idade;

	}
}

