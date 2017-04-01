<?php

#destrutores

class Pessoa{

	Function __construct(){

		echo "Função construtora invocada.";
	}

	Function __destruct(){

		echo "Função destruidora invocada.";
	}
}

$p1 = new Pessoa;

echo "<br>ll<br>";

unset($p1);