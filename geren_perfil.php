<?php
  include_once ('conexao.php');
  
  $sql="SELECT * FROM pessoas";
  $res = mysqli_query($con, $sql);
 ?> 
  
  <!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<style>
		html,body
		{
			background-color: white;
		}
		
		
	</style>
</head>
	<div>
		<table>
			  <thead class="thead-dark">
				<tr>
				  <th scope="col">Id</th>
				  <th scope="col">Login</th>
				  <th scope="col">Nome</th>
				  <th scope="col">Senha</th>
				  <th scope="col">Perfil</th>
				  <th scope="col">Unidade</th>
				  <th scope="col">Editar</th>
				  <th scope="col">Excluir</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php
					while ($dados= mysqli_fetch_assoc($res))
					{
						 echo "<tr>";
						 echo "<td>".$dados['ID_PESSOA']. "</td>";
						 echo "<td>" .$dados['LOGIN_PESSOA']. "</td>";
						 echo "<td>" .$dados['NM_PESSOA']. "</td>";
						 echo "<td>" .$dados['SENHA']. "</td>";
						 echo "<td>" .$dados['PERFIL_DE_ACESSO']. "</td>";
						 echo "<td>" .$dados['UNIDADE']. "</td>";
						 echo "<td>
							<a class='btn btn-primary' href='editar_perfil.php?id=$dados[ID_PESSOA]' > 
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
									<path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
								</svg>
							</a>
						 </td>";
						 echo "<td> 
								<a class='btn btn-outline-danger' href='#'> 
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
									<path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
									<path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
								</svg>
							</a>
						 </td>";
						 echo "</tr>";
						
						
					}
				
				?>
			  </tbody>
			</table>
	</div>
</body>
</html>
	

