<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
<style>
	body{
		color: #fff;
	}
	div{
		border: 5px solid #541675;
		margin: 140px auto ;
		background-color: #9c89ff;
		width: 500px;
	}
	form{
		padding: 10px 150px ;

	}
	h1{
		padding: 10px 180px ;
	}
</style>
</head>
<body>
	<div>

		<h1>Cadastro</h1>
	 <form method="post" action="pag3.php" name="cadastro">

	 	Código:<br>
	 	<input type="number" name="codigo"><br><br>

		Nome:<br>
		<input type="text" name="nome"><br><br>

		Email:<br>
		<input type="email" name="email"><br><br>

		CPF:<br>
		<input type="text" name="cpf"><br><br>

		Sexo:<br>
		<input type="radio" name="sexo">Masculino<br>
		<input type="radio" name="sexo">Feminino<br>
		<input type="radio" name="sexo">Outro:<br><br>

		Usuário:<br>
		<input type="text" name="usuario"><br><br>

		Senha:<br>
		<input type="password" name="senha"><br><br>

		<input type="submit" name="Enviar">
		<a href="login.php">Já possuo cadastro</a>
	 </form>

	</div>

</body>
</html>
<?php 

	$conexao = mysqli_connect("localhost","root","","cadastro");

if (mysqli_connect_errno()) {
    echo "Erro".mysqli_connect_errno();
}
else{ 
    $sql = "INSERT INTO clientes(nome, email,cpf,sexo,usuario,senha) VALUES ('$_POST[nome]', '$_POST[email]', '$_POST[cpf]', '$_POST[sexo]', '$_POST[usuario]', '$_POST[senha]')";
}

mysqli_close($conexao);

 ?>