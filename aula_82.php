<?php

#string double-quoted

#concatenar a + b
#interpolar

$num = 55;

echo "<br>O valor da variável num é: " . $num;
echo "<br>O valor da variável num é: $num";

$arr = ["preto", "Azul", "Amarelo"];
echo "<br>A cor da bola é: $arr[1]";

$a = 10;
$$a = 50;

echo "<br>O valor de a é: $a e o valor de aa é: $a";
echo "<br>O valor de a é: $a e o valor de aa é: ${$a}";

${$arr[2]} = "Marrom";

echo "<br>Var: $arr[2] , ${$arr[2]}";