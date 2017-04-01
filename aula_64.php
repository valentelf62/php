<?php

function soma(){

	$total = func_get_arg(0) + func_get_arg(1);

	echo "<br>" . $total;
}

soma(10, 2);