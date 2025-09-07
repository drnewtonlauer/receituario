<?php include"verificalogin.php";
 include "functions/config.php";
$idmd = $_SESSION['UsuarioID'];
?>
<!DOCTYPE html><html lang="pt-br"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
    <title>Internação</title><?php include "favicon.php"; ?>

	<script src='js/moment.min.js'></script>	
	

  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>	
	
	<script type="text/javascript" src="functions/funcs.js"></script>
	


	
	<style>
   /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
   
  body {
      background-color: #f8fafb;
     
    }

	  
#resultado{
position: absolute;
z-index: 9999; 
}
#resultado2{
position: absolute;
z-index: 9999; 
}

.table2{
font-family:Calibri;	
 width:100%;
 }

.xx {
  border-style: solid;
  border-bottom-width: 0;
  border-top-width: 1px;
  border-right-width: 0;
  border-left-width: 0;
}


  </style>	

  </head>

  <body onLoad="document.Form.med.focus();">
<?php include "menu.php"; ?>


<div class="jumbotron" style="background-color: transparent;  background: transparent; position:responsive; " > 
<div class="container" >
<div class="row">
<div class="col-md-12">
		
<!-- Painel superior -->
<div class="panel panel-default">
	<div class="panel-heading">
	<div class="row">
		<div class="col-md-6" align=left> 
			<button type="button"  onclick="location.href=''"  class="btn btn-sm btn-default" >Limpar</button>
		</div>
		<div class="col-md-6" align=right> 
				
		</div>	
	</div>
	</div>		
	
<!-- Painel inferior -->		
<div class="panel-body">					
	<div class="col-sm-12">				
<br>	
<!-- FORMULÁRIO IDENTIFICAÇÃO -->
	<form class="form-horizontal"" action="functions/inseresus.php" method="POST"> 

		<div class="row">
			<div class="col-md-6"> 
			
			<div class="input-group">
  <span class="input-group-addon input-sm" id="basic-addon1" >FICHA</span>
  <input type="text" class="form-control input-sm" name="be" required aria-describedby="basic-addon1">
</div>

<br>

			<div class="input-group">
  <span class="input-group-addon input-sm" id="basic-addon1">ENDEREÇO</span>
  <input type="text" class="form-control input-sm" name="endereco" required aria-describedby="basic-addon1">
</div>
<br>
					<div class="input-group">
  <span class="input-group-addon input-sm" id="basic-addon1">DATA DE NASCIMENTO</span>
  <input type="text" class="form-control input-sm" name="dn" required aria-describedby="basic-addon1">
</div>		

						
<br>
				<div class="form-group">
					<label for="exampleInputName2">SEXO</label>
					<input type="text" class="form-control" name="sexo" required>
				</div>
<br> 
				<div class="form-group">
					<label for="exampleInputName2">COR/ETNIA</label>
					<input type="text" class="form-control" name="cor" >
				</div>
<br>
				<div class="form-group">
					<label for="exampleInputName2">CNS</label>
					<input type="text" class="form-control" name="cns">
				</div>
<br>		
			</div>

			<div class="col-md-6" > 
				<div class="form-group">
					<label for="exampleInputName2">NOME</label>
					<input type="text" class="form-control" name="nome" required>
				</div>
<br>
				<div class="form-group">
					<label for="exampleInputName2">CEP</label>
					<input type="text" class="form-control" name="cep" >
				</div>
<br>
				<div class="form-group">
					<label for="exampleInputName2">IDADE</label>
					<input type="text" class="form-control" name="idade" required>
				</div>
<br>
				<div class="form-group">
					<label for="exampleInputName2">CPF</label>
					<input type="text" class="form-control" name="cpf">
				</div>
<br>
				<div class="form-group">
					<label for="exampleInputName2">NOME DA MÃE</label>
					<input type="text" class="form-control" name="nomedamae">
				</div>
<br>
				<div class="form-group">
					<label for="exampleInputName2">TELEFONE</label>
					<input type="text" class="form-control" name="telefone">
				</div>
			</div>	
	</div>   

<br><br><br>
  <button type="submit" class="btn btn-primary">Salvar</button>     
	</form> 
<br>


<!-- PACIENTES CADASTRADOS -->
	
<div class="panel panel-default">	
		<div class="panel-body" >
<p  style="color:#2980b9;font-size:12px;">
	Pacientes cadastrados</p>
	
			<ul class="list-group">
<?php 
	  $s = "SELECT * from sus ORDER BY NOME";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){	
echo  
'<li class="list-group-item"  style="padding-bottom: 4px; padding-top: 4px; font-size:12px;font-size:12px;">
 
 '.$mod['nome'].' 
 &nbsp<span class="badge" style="background-color:#5F9EA0; font-size:11px;"><a href="aih2.php?id_sus='.$mod['id_sus'].'" target="_blank" style="text-decoration:none; color: inherit;">AIH</a></span>
 &nbsp<span class="badge" style="background-color:#5F9EA0; font-size:11px;"><a href="apac.php?id_sus='.$mod['id_sus'].'" target="_blank" style="text-decoration:none; color: inherit;">APAC</a></span>
 &nbsp<span class="badge" style="background-color:#5F9EA0; font-size:11px;"><a href="prescricao.php?id_sus='.$mod['id_sus'].'" target="_blank" style="text-decoration:none; color: inherit;">Prescricao</a></span>
</li>
';}
 ?>
 </ul>
 
			</div>
		</div>
</div>
<br>
</tbody></table>							
<br>	
	</div>
</div>
</div>
</div>
</div>
</div>
</div>



</body></html>