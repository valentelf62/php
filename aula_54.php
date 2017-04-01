<?php

#=====================
# === eXcript.com ===
#=====================

#INTERANDO ARRAYS

$lista = ["Domingo" , "Segunda" , "Terça" , "Quarta" , "Quinta" , "Sexta" , "Sábado"];
$qnt = count($lista);
echo $qnt . "<br><br>";

for($x=0; $x<$qnt; $x++){
	echo $x . " : " . $lista[$x] . "<br>";
}