<?php 

	$conexao = mysqli_connect("localhost","root","","cadastro");

if (mysqli_connect_errno()) {
    echo "Erro".mysqli_connect_errno();
}
else{ 
    $sql = "INSERT INTO clientes(nome, email,cpf,sexo,usuario,senha) VALUES ('$_POST[nome]', '$_POST[email]', '$_POST[cpf]', '$_POST[sexo]', '$_POST[usuario]', '$_POST[senha]')";
}

//executando comando de insert na tabela funcionario

	echo "Bem vindo ao sistema!!!";

mysqli_close($conexao);

 ?>