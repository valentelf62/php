<?php

declare(strict_types=1);

#funções com parâmetros tipados

function getArea(int $x, int $y){

	return $x * $y;

}

function getSum(int ...$valores){

	return array_sum($valores);
}

//echo "<br>" . getArea(10, 5);

echo "<br>" . getArea(10, 5);

//echo "<br>" . getSum(1,2,3,4,5,6);

//echo "<br>" . getSum(1,2,3,4,5,6,"100");
