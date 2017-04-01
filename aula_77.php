<?php

#funções anônimas - escopo de nomes

$num = 100;
$num2 = 100;

$func = function() use(&$num,$num2) {
	//echo "Anônima: " . $num;
	$num = 1500;
};

$func();

echo $num;