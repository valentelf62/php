<?php
#Definindo o Array
$arr = ["zero" , "um" , "dois" , "três" , "quatro"];

#Adicionando elementos
$arr[] = "cinco";
$arr[6] = "seis";

#Alterando elementos
$arr[1] = "ummm";
$arr[4] = "quatrro";

#Excluindo elementos
unset($arr[3]);

print_r($arr);