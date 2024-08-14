<?php
 include_once('conexao.php');
 $id= $_GET ['id'];
 
  $sql="SELECT * FROM  pessoas WHERE ID_PESSOA = $id";
  $res = mysqli_query($con, $sql);
  
  if ($res->num_rows>0)
  {
	  while ($dados= mysqli_fetch_assoc($res))
		{
			 
			 $id1= $dados['ID_PESSOA'];
			 $email= $dados['LOGIN_PESSOA'];
			 $nome= $dados['NM_PESSOA'];
			 $senha= $dados['SENHA'];
			 $perfil= $dados['PERFIL_DE_ACESSO'];
			 $unidade= $dados['UNIDADE'];
			
		}
  }
  else
  {
	  header('Location: gerenciar.php');
  }
 
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
	<a href="gerenciar.php"> 
	<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 -1 16 18">
		<path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
	</svg>
	</a>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login-form-title">
						Edição
					</span>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Entre com seu E-mail">
						 <input  class= "input100" type="text" value="<?php echo $nome ?>" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Entre com seu E-mail">
						 <input  class= "input100" type="email" value="<?php echo $email?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Entre com sua senha">
						<input class="input100" type="password" value="<?php echo $senha ?>">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate ="Escolha um perfil">
						<select class="input100" name="perfil">     
							<option value=""> <?php echo $perfil?> </option>
                                    <option value="admin">Administrador</option>
                                    <option value="usuario">Usuário</option>  <!-- ver que precisa mais cadastrar -->
									<option value="gerente">Gerente</option> 
						</select>  
						<span class="focus-input100"></span>
					</div> <br>
					
					<div class="wrap-input100 validate-input" data-validate ="Escolha uma unidade">
						<select class="input100"  name="unidade">     
							<option value=""><?php echo $unidade ?></option>
                                    <option value="canoas">Canoas</option>
                                    <option value="ead">Ead</option>  
									<option value="gravatai">Gravataí</option>  
									<option value="sao jeronimo">São jeronimo</option>    <!-- ver que precisa mais cadastrar -->
						</select>  
						<span class="focus-input100"></span>
					</div> <br>
					
					<!--<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Esqueceu
						</span>

						<a href="#" class="txt2">
							Usuário/ Senha?
						</a>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" tyoe="submit" value="atualizar">
							Atualizar
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