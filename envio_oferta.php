<?php

	include_once('conexao.php');

		$email = filter_var($_REQUEST['email'], FILTER_SANITIZE_STRING);
		$senha = filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);
		$perfil = filter_var($_REQUEST['perfil'], FILTER_SANITIZE_STRING);
		$unidade = filter_var($_REQUEST['unidade'], FILTER_SANITIZE_STRING);
		$nome= filter_var($_REQUEST['nome'], FILTER_SANITIZE_STRING);
		$sql="INSERT INTO `oferta`(`ID_OFERTA`, `ID_ESTABELECIMENTO`, `ID_TIPO_CONCURSO`, `CONC_PERIODO`, `CONC_ABRE_INSCRICAO`, `CONC_FECHA_INSCRICAO`, `CONC_PRORROGA`, 
		`CONC_INI_AULA_PRESENCIAL_SEM_1`, `CONC_INI_AULA_EAD_SEM_1`, `CONC_INI_AULA_PRESENCIAL_SEM_2`, `CONC_INI_AULA_EAD_SEM_2`, `CONC_TAXA`) 
		VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]')";
		
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