<?php

#construtures

class Pessoa{

	public $idade = 0;

	public $nome;

	function __construct(){
		echo "<br>teste<br>";
		var_dump($this);
	}
}

$p1 = new Pessoa();
$p2 = new Pessoa();