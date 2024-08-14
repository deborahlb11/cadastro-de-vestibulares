<?php
 /*include_once('conexao.php');
  $sql="SELECT NM_UNIDADE FROM estabelecimentos";
  $res = mysqli_query($con, $sql);
  
  if ($res->num_rows>0)
  {
	  while ($dados= mysqli_fetch_assoc($res))
		{
			 
			 $unidade= $dados['NM_UNIDADE'];
			 
		}
  }  */
 
 
?>
 


<!DOCTYPE html>
<html lang="pt-br">

 <head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="salvarcad.php">
					<span class="login-form-title">
						Cadastro
					</span>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Entre com seu E-mail">
						 <input  class= "input100" type="text" name= "nome" placeholder="Nome" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Entre com seu E-mail">
						 <input  class= "input100" type="email" name= "email" placeholder="E-mail" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Entre com sua senha">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate ="Escolha um perfil">
						<select class="input100" name="perfil">     
							<option value=""selected>Perfil</option>
                                    <option value="admin">Administrador</option>
                                    <option value="usuario">Usuário</option>  <!-- ver que precisa mais cadastrar ou puxa do bando de dados -->
									<option value="gerente">Gerente</option> 
						</select>  
						<span class="focus-input100"></span>
					</div> <br>
					
					<?php
						include_once('conexao.php');
						$sql="SELECT * FROM estabelecimentos";
						 $res = mysqli_query($con, $sql);

							if ($res->num_rows > 0) 
							{
								
								while($row = $res->fetch_assoc()) 
								{
									echo "<input type='checkbox' name='unidades[]' value='" . $row['ID_ESTABELECIMENTO'] . "'>" . $row['NM_UNIDADE'] . "<br>";
								}
							} 
							else 
							{
								echo "Nenhuma opção encontrada.";
							}
					?>
							

					 <br>
					
					<!--<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Esqueceus
						</span>

						<a href="#" class="txt2">
							Usuário/ Senha?
						</a>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" tyoe="submit" value="cadastrar">
							Cadastrar
						</button>
					</div>
					<br>

					<!-- <div class="flex-col-c p-t-25 p-b-40">
						<span class="txt1 p-b-9">
							Não é cadastrado ainda
						</span>

						<a href="#" class="txt3">
							Cadastre agora !
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>