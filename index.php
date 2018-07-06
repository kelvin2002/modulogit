<!DOCTYPE html>
<html>
<head>
	<title>Formularios Parte 2</title>
</head>
<style type="text/css">
	.form {
		margin: 0 auto;
		width: 80%;
		background-color: #eee;
		text-align: center;
	}

	.dados {
		margin: 0 auto;
		width: 80%;
		background-color: #eee;
		text-align: center;
	}
</style>
<body>
	<div class="form">
		<h3>Cadastro de Usuarios</h3>
		<form method="POST">
			Seu Email:<br>
			<input type="email" name="email"><br><br>
			Senha:<br>
			<input type="password" name="senha"><br><br>
			<input type="submit" value="CADASTRAR">

		</form>
	</div>
</br>
	<div class="dados">
		<p>Verificando dados recebidos com PHP</p>
		<?php 
		if (isset($_POST['email']) && empty($_POST['email']) == false) 
		{
			if (isset($_POST['senha']) && empty($_POST['senha']) == false) 
			{
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				echo "<h3>Dados recebido com Sucesso!</h3><br>";
				echo "<p>Email informado:<p>".$email."<br>";
				echo "<p>Senha informada:</p>".$senha;
			}
		}
		?>
	</div>
</body>
</html>