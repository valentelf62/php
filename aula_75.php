<?php

#importanto arquivos php

require('code.php');

echo $teste . "<br>";

$teste = 5;

require_once('code.php');

echo $teste;
