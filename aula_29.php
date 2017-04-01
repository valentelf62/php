<!DOCTYPE html>
<html lang="pt-br">

	<head>

		<meta charset="UTF-8">
		<title>

			Tela de Login e Senha - Curso PHP - eXcript

		</title>

	</head>

	<body>

		<?php

			$login = "luis";
			$senha = "filipe";

			if ((isset($_POST["login"]))and(isset($_POST["senha"]))) {
				//echo "login : " . $_POST["login"];
				//echo "<br>senha : " . $_POST["senha"];

				if ($_POST["login"] == $login and $_POST["senha"] == $senha) {
					echo "Login efetuado com sucesso";
				}else{
					echo "Login ou senha inválidos";
				}
			}


		?>

		<form method="post">

			Login <input type="text" name="login"><br>
			Senha <input type="password" name="senha">
			<input type="submit">

		</form>




	</body>

</html>