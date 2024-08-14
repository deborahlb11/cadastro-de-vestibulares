<?php

	$host = "localhost";
	$username = "root";
	$dbname = "sec";
	$senha= "";
	$con = mysqli_connect($host, $username,$senha,$dbname);

	if (!$con) 
	{
  		die("Conexão falhou: " . mysqli_connect_error());
	}
?>

