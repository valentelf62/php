<?php

//echo "texto1 : " . $_GET["texto1"] . "<br>";
//echo "texto2 : " . $_GET["texto2"] . "<br>";

$txt = isset($_GET["texto1"]) ? $_GET["texto1"] : "A chave não existe.";

echo $txt;