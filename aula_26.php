<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>Estrutura elseif - Curso PHP - eXcrip</title>

</head>

<body>

	<?php
		if (isset($_POST['x']) and isset($_POST['y'])) {
			$x = $_POST['x'];
			$y = $_POST['y'];
			echo "<br>x = " . $x;
			echo "<br>y = " . $y;
		}
	?>

	<form method="POST">
		<input type="text" name="x">
		<input type="text" name="y">
		<input type="submit">
	</form>


</body>

</html>