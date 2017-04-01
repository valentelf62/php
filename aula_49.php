<?php

$varvar = "Teste";
$$varvar = 10;

echo $varvar . " " . $$varvar . "<br>";

echo $Teste . "<br>";

$num = 10;
$$num = 1000;

echo $num . "<br>";
echo $$num . "<br>";
