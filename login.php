<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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
		padding: 10px 150px;
		grid-area: 70px;

	}
	h1{
		padding: 10px 210px ;
	}
</style>
</head>
<body>
	<div>
		<h1>Login</h1>
		<form method="post" action="pag3.php" name="login">
			Email:<br>
			<input type="email" name="email"><br><br>

			Senha:<br>
			<input type="password" name="senha"><br><br>

			<input type="submit" name="Entrar">

			<a href="ex.php">Não possuo cadastro</a>
		</form>
	</div>
</body>
</html>