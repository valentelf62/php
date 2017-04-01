<?php

#funções anônimas e arrays

#array_map(<f.anônima>,<array>)

$lista = [1,2,3,4,5];

$f = function($x){
	return $x * $x;
};

$lista_proc = array_map($f, $lista);
print_r($lista_proc);
echo "<br>";

#array_filter(<array>, <f.anonima>)

$filtro = function($x){
	return $x < 3;
};

$lista_filtro = array_filter($lista, $filtro);

print_r($lista_filtro);