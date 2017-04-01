<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Ambiente pa Estudo PHP - eXcrip</title>

</head>

<body>

	<?php

		if(isset($_POST["valor1"])){
			echo $_POST["valor1"];	
		}
		
		//echo $_POST["valor2"];
		//echo $_POST["teste"];

		//<input type="text" name="valor2" />
		//<input type="text" name="teste" />


	?>

	<form method="POST">

		<input type="text" name="valor1" />
		<input type="submit" />

	</form>

</body>

</html>