<?php

//Primeira definição de Array Indexado

$cores = array("Azul","Amarelo","Verde","Branco");
print_r($cores);
echo "<br>";

$cores2[0] = "Azul";
$cores2[1] = "Amarelo";
$cores2[2] = "Verde";
$cores2[3] = "Branco";
$cores2[10] = "Azul";
$cores2[11] = "Amarelo";
$cores2[12] = "Verde";
$cores2[13] = "Branco";
print_r($cores2);
echo "<br>";
$cores3[] = "Azul";
$cores3[] = "Amarelo";
$cores3[] = "Verde";
$cores3[] = "Branco";
print_r($cores3);
echo "<br>";
$cores4 = ["Azul","Amarelo","Verde","Branco"];
print_r($cores4);
