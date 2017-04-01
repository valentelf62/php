<?php

#funções anônimas

$func = function($nome){
	echo "O nome enviado como parâmetro é: $nome";
};

function teste($f){
	$f("Cláudio");
}

teste($func);

$func("eXcript");