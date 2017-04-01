<?php

//$jogo = array(
//	array("ID"=>1, "NOME"=>"Zéca","PONTOS"=>11),
//	array("ID"=>2, "NOME"=>"José","PONTOS"=>4),
//	array("ID"=>3, "NOME"=>"Zéca","PONTOS"=>22),
//	);

$jogo = [

			["ID"=>1, "NOME"=>"Zéca","PONTOS"=>11],
			["ID"=>2, "NOME"=>"José","PONTOS"=>4],
			["ID"=>3, "NOME"=>"Zéca","PONTOS"=>22]

		];

print_r($jogo);
echo $jogo[1]["PONTOS"];