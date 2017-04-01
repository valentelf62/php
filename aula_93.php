<?php

# criação de objetos/instâncias

class Classe{
	public $a = 1;
	public $b = 2;
	public $c = 3;
}

$objetoA = new Classe();
$objetoB = new Classe();
$objetoC = new Classe();

var_dump($objetoA);
echo "<br>";
//var_dump($objetoB);
echo "<br>";
//var_dump($objetoC);
unset($objetoA);
var_dump($objetoA);
