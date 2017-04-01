<?php

#funções para mnipular strings

#função - strlen(<string>) - quantidade de caracteres
$len = strlen('123456abc');
echo "Quantidade de caracteres: $len <br>";

#função - substr(<str>, <indice>, <len>)
# str='aaabbbccc' substr(str, 3, 3)=bbb

$str = 'aaabbbccc';
$sub = substr($str, 3, 3);
echo "Os caracteres: $sub<br>";
$sub = substr($str, 3);
echo "Os caracteres sem <len>: $sub.<br>";

#função - strtoupper(<str>) - converte para letras maiúsculas

$str = 'eXcript';
$up = strtoupper($str);
echo "<br>Maiúsculo: $up.";

$low = strtolower($str);
echo "<br>Minúsculo: $low.";

# função - str_replace(<chars>, <novastr, <str>)-
# substitui parte da string

$str='aaabbbccc';
$nova = str_replace('b', '-', $str);
echo "<br>Original: $str, Substituindo: $nova.";
