<?php

	
include_once('conexao.php');

		$email = filter_var($_REQUEST['email'], FILTER_SANITIZE_STRING);
		$senha = filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);
		$sql="SELECT LOGIN_PESSOA, SENHA, PERFIL_DE_ACESSO, STATUS FROM pessoas WHERE LOGIN_PESSOA = '$email' and  SENHA = '$senha'";
		$res = mysqli_query($con, $sql);
		
		if(mysqli_num_rows($res)==1)
		{
			$row = $res->fetch_assoc();
			$_SESSION['PERFIL_DE_ACESSO'] = $row['PERFIL_DE_ACESSO'];
			$_SESSION['STATUS'] = $row['STATUS'];
			
			
			if($row['STATUS']=='1')
			{
					switch ($_SESSION['PERFIL_DE_ACESSO']) 
				{
				case 'admin':
					header("Location: pg_admin.php");
					break;
				case 'usuario':
					header("Location: pg_usuario.php");
					break;
				default:
					// Caso o cargo não seja reconhecido, redirecionar para uma página de erro
					header("Location:index.php");
					break;
				}
			}
			else 
			{
				header('location:index.php');
			}
		}

?> 
