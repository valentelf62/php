<?php

$a = [1,2,3];

function func1(&$arg){

	$arg[1] = 5;

	print_r($arg);

}

func1($a);
print_r($a);
echo "<br><br>";

function &func(){
	$a = [1,2,3];
	print_r($a);
	return $a;
}

$valor = &func();
print_r($valor);

