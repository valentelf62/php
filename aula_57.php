<?php

#=====================
# === eXcript.com ===
#=====================

#INTERAÇÃO E ALTERAÇÃo DOS VALORES

$nums = range(0, 10);
//print_r($nums);
foreach ($nums as $chave => $valor) {
	$valor *= 10;
	echo "$valor<br>";
}

print_r($nums);
foreach ($nums as $chave => &$valor) {
	$valor *= 10;
	echo "$valor<br>";
}

print_r($nums);

