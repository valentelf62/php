<?php

#prática - funções anônimas

$quadrado = function($item) {
	return $item * $item;
};

$cubo = function($item) use ($quadrado){
	return $quadrado($item) * $item;
};

$soma = function($item){
	return $item + $item;
};



function processa_lista($lista, $func){
	foreach ($lista as &$item) {
		$item = $func($item);
	}
	return $lista;
}

echo "<br>quadrado";
print_r(processa_lista(range(1, 10), $quadrado));

echo "<br>cubo";
print_r(processa_lista(range(1, 10), $cubo));

echo "<br>soma";
print_r(processa_lista(range(1, 10), $soma));



//print_r(processa_lista(
//	range(1,10),
//	function($item){
//		return $item - 10;
//	}
//	)
//);