<?php
//para rodar tem que usar aula_73.php?ddd=47&telefone=3041-0000
#null coalesce operator

$ddd = $_GET['ddd'] ?? "00";
$telefone = $_GET['telefone'] 
	?? $_GET['celular'] 
	?? "0000-0000";

echo "Tel: ($ddd) $telefone";