<?php

define("TESTE", 10);
echo TESTE . "<br>";

for ($x=0; $x<5 ; $x++) { 
	define("CONSTANTE" . $x, $x);
}

echo CONSTANTE0 . "<br>";
echo CONSTANTE1 . "<br>";
echo CONSTANTE2 . "<br>";
echo CONSTANTE3 . "<br>";
echo CONSTANTE4 . "<br>";

const VALOR = 1000;
echo VALOR . "<br>";