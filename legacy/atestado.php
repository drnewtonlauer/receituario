<?php 
if (isset($_POST['atestado']) or isset($_POST['titulo']) or isset($_POST['txt'])  ){
 
   header('Location: atestado.php'); 
   

}
?>
<?php  
include"verificalogin.php";
include"functions/config.php";


if (isset($_GET['op'])){
unset($_SESSION['atestado']);	
unset($_SESSION['titulo']);
		
}




if (empty($_SESSION['atestado'])) {
$_SESSION['atestado'] = [];
}
if (empty($_SESSION['titulo'])) {
$_SESSION['titulo'] = [];
}







//pega txt 
if (isset($_POST['atestado'])){
$_SESSION['titulo'] = $_POST['titulo'];
$_SESSION['atestado'] = $_POST['atestado'];
}


//remove txt
if (isset($_GET['delatt'])){
	
unset ($_SESSION['atestado']);
unset ($_SESSION['titulo']);
}



?>
<!DOCTYPE html><html lang="pt-br"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
    <title>Atestado</title><?php include "favicon.php"; ?>

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
<script>
var posicao = localStorage.getItem('posicaoScroll');

/* Se existir uma opção salva seta o scroll nela */
if(posicao) {    
    /* Timeout necessário para funcionar no Chrome */
    setTimeout(function() {
        window.scrollTo(0, posicao);
    }, 1);
}

/* Verifica mudanças no Scroll e salva no localStorage a posição */
window.onscroll = function (e) {
    posicao = window.scrollY;
    localStorage.setItem('posicaoScroll', JSON.stringify(posicao));
}
</script>
  <body>
<?php include "menu.php"; ?>

 <div class="jumbotron" style="background-color: transparent;  background: transparent; position:responsive; top:30px" > 
		<div class="container">
		<div class="col-md-2">
		</div>
				<div class="col-md-8">
	<div class="panel panel-default">
		<div class="panel-heading" >
	<div class="row">
	<div class="col-md-6" align=left>
			
  

	</div>
	<div class="col-md-6" align=right>
		 
		
  <button type="button"   onclick="window.open('imprimiratt.php')" class="btn btn-primary  btn-sm">Gerar Atestado</button>
  

		</div>	
		
		
		</div>
		
	</div>
							
						<div class="panel-body"><br>
<br><br>
							<br><br>
							<div class="col-sm-12"><div align="center"><strong><font style="font-size:14px; face:Calibri"><?php if (!empty($_SESSION['titulo'])) {echo $_SESSION['titulo'];}?></font></strong></div>
							<br><br>
	
<table class="table2">
<?php
	


if (!empty($_SESSION['atestado'])) {


echo '	
	
   <tr><td ><font style="font-size:14px; face:Calibri">'.nl2br($_SESSION['atestado']).'</font></td></tr>
    <tr><td colspan="2"><br></td></tr>
   <tr><td colspan="2" align=center><a href="atestado.php?delatt=1" style="text-decoration: none;"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="color: gray;"></span></a></td></tr>
   
    <tr><td colspan="2"><br></td></tr>';

}


if (empty($_SESSION['atestado']) ) {echo '<tr><td colspan="2"><font style="color:gray;"><em>Atestado em branco</em></font></td></tr>
<tr><td ><br></td></tr>';} 

?>

<tr><td  align=center colspan=2>

	<div class="btn-group">
  <button type="button"  class="btn btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="font-size:14px;border:none;color:#3d72aa;">+ Adicionar Item</button>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
  
  
    <li><a data-toggle="modal" data-target="#myModal3" href="#">Atestado Médico</a></li>
    <li><a data-toggle="modal" data-target="#myModal" href="#">Atestado de Comparecimento</a></li>
    <li><a data-toggle="modal" data-target="#myModal2" href="#">Atestado de Acompanhante</a></li>
<li><a data-toggle="modal" data-target="#myModal4" href="#">Em branco</a></li>
  </ul>
</div>

</td></tr>
	
</table>
<br><br><br><br><br><br><br><br><br><br>
	
</div></div>

</div>			
</div>
<div class="col-md-2">
		</div>


</div>
    </div>



<div id="myModal" class="modal" tabindex="-1"  role="dialog">
  <div class="modal-dialog" style="width:40%;">

    <!-- Modal content-->
    <div class="modal-content" >
    
      <div class="modal-body">
      
			<form class="form-horizontal Form" action="atestado.php" id="Form" name="Form" method="POST" autocomplete="off">		
		
				<div class="form-group form-group-sm">
			
					<div class="col-sm-12">					
	<input type="hidden" name="titulo" value="Atestado de Comparecimento">
<textarea  type="text" class="form-control"   rows="8" name="atestado"  style="border:0 none;box-shadow: 0 0 0 0;" required>Atesto para os devidos fins que <?php echo $_SESSION['nome_av'];?>, compareceu a este consultório e foi por mim avaliado e atendido na presente data.</textarea>
						 
					</div>	
				
				</div>
									
	
								
      </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
       <button type="submit" class="btn btn-primary btn-sm" >Adicionar</button></form>	
      </div>
    </div>

  </div>
</div>

<div id="myModal2" class="modal" tabindex="-1"  role="dialog">
  <div class="modal-dialog" style="width:40%;">

    <!-- Modal content-->
    <div class="modal-content" >
    
      <div class="modal-body">
      
			<form class="form-horizontal Form" action="atestado.php" id="Form2" name="Form2" method="POST" autocomplete="off">		
		
				<div class="form-group form-group-sm">
			
					<div class="col-sm-12">					
	<input type="hidden" name="titulo" value="Atestado Médico">
<textarea  type="text" class="form-control"   rows="8" name="atestado"  style="border:0 none;box-shadow: 0 0 0 0;" required>Atesto para os devidos fins, a pedido, que o(a) Sr(a). <?php echo $_SESSION['nome_av'];?>, paciente sob meus cuidados, foi atendido(a) no dia <?php echo date('d/m/Y');?>, tendo sido acompanhada pelo(a) Sr(a). Nome_do_Acompanhante.</textarea>
						 
					</div>	
				
				</div>
									
	
								
      </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
       <button type="submit" class="btn btn-primary btn-sm" >Adicionar</button></form>	
      </div>
    </div>

  </div>
</div>
<div id="myModal3" class="modal" tabindex="-1"  role="dialog">
  <div class="modal-dialog" style="width:40%;">

    <!-- Modal content-->
    <div class="modal-content" >
    
      <div class="modal-body">
      
			<form class="form-horizontal Form" action="atestado.php" id="Form3" name="Form3" method="POST" autocomplete="off">		
		
				<div class="form-group form-group-sm">
			
					<div class="col-sm-12">					
	<input type="hidden" name="titulo" value="Atestado Médico">
<textarea  type="text" class="form-control"   rows="8" name="atestado"  style="border:0 none;box-shadow: 0 0 0 0;" required>Atesto para os devidos fins que o(a) Sr(a). <?php echo $_SESSION['nome_av'];?>, paciente sob meus cuidados, foi atendido(a) no dia <?php echo date('d/m/Y');?> e necessita de 1 dia(s) de repouso.</textarea>
						 
					</div>	
				
				</div>
									
	
								
      </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
       <button type="submit" class="btn btn-primary btn-sm" >Adicionar</button></form>	
      </div>
    </div>

  </div>
</div>



<div id="myModal4" class="modal" tabindex="-1"  role="dialog">
  <div class="modal-dialog" style="width:40%;">

    <!-- Modal content-->
    <div class="modal-content" >
    
      <div class="modal-body">
      
			<form class="form-horizontal Form" action="atestado.php" id="Form4" name="Form4" method="POST" autocomplete="off">		
		
				<div class="form-group form-group-sm">
			
					<div class="col-sm-12">					
						<input type="hidden" name="titulo" value="Receituário">					
							  <textarea  type="text" class="form-control"   style="border:0 none;box-shadow: 0 0 0 0;" placeholder="Digite..." rows="8" name="atestado"  required>Nome: <?php echo $_SESSION['nome_av'];?>&#10;&#10;</textarea>
						
					</div>	
				
				</div>
									
	
								
      </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
       <button type="submit" class="btn btn-primary btn-sm" >Adicionar</button></form>	
      </div>
    </div>

  </div>
</div>
<?php if (isset($_GET['at1'])) { 
echo'
<script type="text/javascript">

$(document).ready(function() {
    $(\'#myModal3\').modal(\'show\');
})
</script>';}?>
</body></html>