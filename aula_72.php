<?php

declare(strict_types=1);

#valores de rotorno tipado

function cubo(float $num) : float {
	return $num * $num * $num;
}

function teste() : array{
	return [10, "eXcript", 5.1];
}

function x() : int{
	return "aa";
}

echo "<br>" . cubo(10);
echo "<br>" . cubo(10.5);
echo "<br>";
var_dump( teste() );
echo "<br>";
x();