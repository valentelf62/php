<!DOCTYPE html>
<html>

	<head>

		<meta charset="UTF-8">
		<title>Tabuada - Curso PHP - eXcript</title>

	</head>

	<body>

		<?php
			$tab = 0;
			if (isset($_POST["edTabuada"])) {
				$tab = $_POST["edTabuada"];
				if (!is_numeric($tab)) {
					echo "<br>O valor informado não é um número.<br>";
				}else{
					for ($num=0; $num <=10 ; $num++) { 
						echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
					}
				}
			}
		?>

		<form method="post">
			<input type="text" name="edTabuada">
			<input type="submit">
		</form>



	</body>

</html>