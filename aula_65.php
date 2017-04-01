<?php

function somaTudo(){

	$lista = func_get_args();
	$qntd = func_num_args();
	$total = 0;

	for($x = 0;$x < $qntd; $x++){
		$total += $lista[$x];
	}

	echo "<br>Com laço For a soma de todos parâmetros é: " . $total;

}

somaTudo(1,2,3);

somaTudo(1,2,3,4,5,6);

function somaTudo2(){

	$lista = func_get_args();
	$qntd = func_num_args();
	$total = 0;

	foreach ($lista as $item) {
		$total += $item;
	}

	echo "<br>Com laço foreach a soma de todos parâmetros é: " . $total;

}

somaTudo2(1,2,3);

somaTudo2(1,2,3,4,5,6);