<?php

function media1(...$valores){

	echo print_r($valores);
}

media1(1,2,3);

function media2(...$valores){

	$total = array_sum($valores);
	$total = $total / count($valores);
	return $total;

}

echo "<br>" . media2(5,5,6);
