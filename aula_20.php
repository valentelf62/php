<?php

$num1 = 9;
$num2 = 2;
$res = $num1 / $num2;
$resto = $num1 % $num2;

echo $num1 . " dividido por " . $num2 . " = " . $res;

echo "<br>O resto da divisão entre " . $num1 . " e " . $num2 . " = " . $resto;

echo "<br>O resto da divisão entre 7 e 3.3 só é correto se usarmos a função fmod(), " . fmod(7, 3.3);