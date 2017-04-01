<?php

# heredoc e nowdoc

# heredoc == ""

$x = 50;

$heredoc = <<<TESTE
<div>O valor da variável x é: $x</div>
TESTE;

echo $heredoc;

#nowdoc ==''

$nowdoc = <<<'eot'

	/**
	* 
	*/
	class NowDoc
	{
		
		function __construct()
		{
			# code...
		}
	}

eot;

echo $nowdoc;