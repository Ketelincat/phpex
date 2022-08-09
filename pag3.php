<?php 
	$conexao = mysqli_connect("localhost","root","","cadastro");

	$sql = "SELECT * from clientes where (email = '$_POST[email]')";
	$sql2 = "SELECT * from clientes where (senha = '$_POST[senha]')";
	$logine = $_POST['emailc'];
	$logins = $_POST['senhac'];
    

    if($logine = $sql && $logins = $sql2){
 		echo "Bem vindo ao sistema!!!";
      
    }else{
    	echo "Usuário não encontrado";
    }

	


mysqli_close($conexao);
	
 ?>