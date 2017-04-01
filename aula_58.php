<?php

#arrays associativos

$pontos = ["Zé"=>11,"José"=>4,"Zéca"=>22];

echo "Zé: " . $pontos["Zé"] . "<br>";
echo "José: " . $pontos["José"] . "<br>";
echo "Zéca: " . $pontos["Zéca"] . "<br>";

$pontos["Zéca"] += 1;
echo "Zéca: " . $pontos["Zéca"] . "<br>";
