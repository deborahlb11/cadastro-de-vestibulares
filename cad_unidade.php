<?php

 include_once('conexao.php');
  $id= $_GET ['id'];
        
		$id_oferta = filter_var($_REQUEST['id_oferta'], FILTER_SANITIZE_STRING);
		$estabelecimento = filter_var($_REQUEST['estabelecimento'], FILTER_SANITIZE_STRING);
		$periodo = filter_var($_REQUEST['periodo'], FILTER_SANITIZE_STRING);
		$abertura = filter_var($_REQUEST['abertura'], FILTER_SANITIZE_STRING);
		$fechamento= filter_var($_REQUEST['fechamento'], FILTER_SANITIZE_STRING);
		$prorrogacao= filter_var($_REQUEST['prorrogacao'], FILTER_SANITIZE_STRING);
		$pren_pri_sem= filter_var($_REQUEST['pren_pri_sem'], FILTER_SANITIZE_STRING);
		$ead_pri_sem= filter_var($_REQUEST['ead_pri_sem'], FILTER_SANITIZE_STRING);
		$pren_seg_sem= filter_var($_REQUEST['pren_seg_sem'], FILTER_SANITIZE_STRING);
		$ead_seg_sem= filter_var($_REQUEST['ead_seg_sem'], FILTER_SANITIZE_STRING);
		$taxa= filter_var($_REQUEST['taxa'], FILTER_SANITIZE_STRING);
		
		
		$sql="INSERT INTO oferta (ID_OFERTA, ID_ESTABELECIMENTO, ID_TIPO_CONCURSO, CONC_PERIODO, CONC_ABRE_INSCRICAO, CONC_FECHA_INSCRICAO, CONC_PRORROGA, CONC_INI_AULA_PRESENCIAL_SEM_1, CONC_INI_AULA_EAD_SEM_1, CONC_INI_AULA_PRESENCIAL_SEM_2, CONC_INI_AULA_EAD_SEM_2, CONC_TAXA ) VALUES ('$id_oferta','$estabelecimento','$id_conc','$periodo','$abertura','$fechamento','$prorrogacao','$pren_pri_sem','$ead_pri_sem','$pren_seg_sem','$ead_seg_sem','$taxa')";
		$res = mysqli_query($con, $sql);
		
		if ($res === TRUE) 
		{
            
		}
		else 
		{
			echo "Erro: " . $sql . "<br>" . $conn->error;
		} 
					
 $sql="SELECT * FROM cursos";
  $res = mysqli_query($con, $sql);
  
  if ($res->num_rows>0)
  {
	  while ($dados= mysqli_fetch_assoc($res))
		{
			 
            $unidade= $dados['NM_UNIDADE']; 
            $curso= $dados['NM_CURSO']; 
            $turno= $dados['CUR_TURNO']; 
            $vagas= $dados['VAGAS']; 
            $ato_reg= $dados['CUR_ATO_REGULATORIO']; 
            $situacao= $dados['SITUACAO'];
            
		}
  }
  else
  {
	  header('Location:gerenciar.php');
  }
  ?>
                       
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand">Cadastro de Unidade</a>
        </div>
        <div class="d-flex">
            <a href="cad_oferta.php" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
    <br>
    <br>
	 <form method="post" action="salvar_unidade.php">
    <div class="m-5">
        <table class="table text-white table-bg" >
            <thead>
				<tr>
					<th scope="col">Tipo de concurso </th>
					 <th>
					 </th>
				</tr>
                <tr>
                    <th scope="col">Unidade</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Vagas</th>
                    <th scope="col">Ato Regulatório</th>
                    <th scope="col">Ativo </th>
                   
                </tr>
            </thead>
            <tbody>
				<tr>
                	 <th>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Entre com seu E-mail">
                            <input  class= "input100" type="text" value="<?php echo $unidade ?>" >
                            <span class="focus-input100"></span>
                       </div>
                    </th> 
                </tr> 
                <tr>
                	 <th>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Entre com seu E-mail">
                            <input  class= "input100" type="text" value="<?php echo $curso ?>" >
                            <span class="focus-input100"></span>
                       </div>
                    </th> 
                </tr>   
                <tr>
                	 <th>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Entre com seu E-mail">
                            <input  class= "input100" type="text" value="<?php echo  $turno ?>" >
                            <span class="focus-input100"></span>
                       </div>
                    </th> 
                </tr>   
                <tr>
                	 <th>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Entre com seu E-mail">
                            <input  class= "input100" type="text" value="<?php echo $vagas ?>" >
                            <span class="focus-input100"></span>
                       </div>
                    </th> 
                </tr>   
                <tr>
                	 <th>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Entre com seu E-mail">
                            <input  class= "input100" type="text" value="<?php echo $ato_reg ?>" >
                            <span class="focus-input100"></span>
                       </div>
                    </th> 
                </tr>   
                <tr>
                	 <th>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Entre com seu E-mail">
                            <input  class= "input100" type="text" value="<?php echo $situacao ?>" >
                            <span class="focus-input100"></span>
                       </div>
                    </th> 
                </tr>   

				<tr>
					 <th>
						 <div class="d-flex">
							<input type="submit" class="btn btn-danger me-5" value ="Salvar"></input>
						</div>
						
					 </th>
				</tr>	
            </tbody>
        </table>
    </div>
	</form>
</body>
</html>