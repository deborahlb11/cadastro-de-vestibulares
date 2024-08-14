<?php

	include_once('conexao.php');
	
		if ( isset($_POST['unidade']))
		{
			

		$email = filter_var($_REQUEST['email'], FILTER_SANITIZE_STRING);
		$senha = filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);
		$perfil = filter_var($_REQUEST['perfil'], FILTER_SANITIZE_STRING);
		$unidade = implode(", ". $_POST['unidade']); //filter_var($_REQUEST['unidade'], FILTER_SANITIZE_STRING);
		$nome= filter_var($_REQUEST['nome'], FILTER_SANITIZE_STRING);
		}
		
		$sql="INSERT INTO pessoas (LOGIN_PESSOA, NM_PESSOA, SENHA, PERFIL_DE_ACESSO, UNIDADE) VALUES ('$email','$nome','$senha','$perfil','$unidade')";
		$res = mysqli_query($con, $sql);
	
		
		if ($res === TRUE) 
		{
			header('Location:index.php');
			
		}
		else 
		{
			echo "Erro: " . $sql . "<br>" . $conn->error;
		}
?> 