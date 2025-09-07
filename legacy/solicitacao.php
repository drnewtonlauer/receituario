<?php 
if (isset($_POST['sol'])  ){
 
   header('Location: solicitacao.php'); 
   

}
  
include"verificalogin.php";
include"functions/config.php";


$idmd = $_SESSION['UsuarioID'];


if (isset($_GET['op'])){
unset($_SESSION['solicitacao']);	
unset($_SESSION['txt']);
		
}


if (empty($_SESSION['solicitacao'])) {
$_SESSION['solicitacao'] = [];
}


//----------------------------------------------------------------------------------------

//pega Solicitacao inserido agora
if (isset($_GET['idsol'])){
$id = $_GET['idsol'];
$r = "SELECT * from solicito where id='$id'";
$r_events = mysqli_query($conn, $r);
$drog = mysqli_fetch_array($r_events) ;	
$droga = $drog['nome'];


$_SESSION['solicitacao'][] = $droga;

}
//remove solicitacao
if (isset($_GET['delsol'])){
	$del = $_GET['delsol'];
unset ($_SESSION['solicitacao'][$del]);
$_SESSION['solicitacao'] = array_values ($_SESSION['solicitacao']);
 header ('Location: solicitacao.php');
}

//pega solicitacao do banco para modal
if (isset($_GET['id3'])){
$id = $_GET['id3'];
$r = "SELECT * from solicito where id='$id'";
$r_events = mysqli_query($conn, $r);
$drog = mysqli_fetch_array($r_events) ;	
$droga = $drog['nome'];

}

//pega solicitacao do modal modificado banco
if (isset($_POST['sol'])){
$droga=$_POST['sol'];

$_SESSION['solicitacao'][] = $droga;
}
//------------------------------------------------------------------------------------






//-----------------------------------------------------------------------------------------
// modelo
if (isset($_GET['idmod'])){
$id = $_GET['idmod'];
$k = "SELECT * from modelo where id='$id'";
$k_events = mysqli_query($conn, $k);
$mdrog = mysqli_fetch_array($k_events) ;	
$mdroga = unserialize($mdrog['modelo']);
foreach ($mdroga as $tipo => $array)
{
foreach ($array as $arr => $array2){
array_push($_SESSION[$tipo], $array2); }}
 header ('Location: solicitacao.php');
}


//--------------------------------------------------------------------------------------------




?>
<!DOCTYPE html><html lang="pt-br"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
    <title>Solicitação</title><?php include "favicon.php"; ?>

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

<body  onLoad="document.Form2.sol.focus();">
<?php include "menu.php"; ?>

 <div class="jumbotron" style="background-color: transparent;  background: transparent; position:responsive; top:30px" > 
		<div class="container">
			<div class="row">
				<div class="col-md-9">
	<div class="panel panel-default">	
		<div class="panel-heading" >
	<div class="row">
	<div class="col-md-6" align=left>
			
  <button type="button"  data-toggle="modal" data-target="#myModal2" class="btn btn-default  btn-sm">Modelos</button>
   <button type="button"  data-toggle="modal" data-target="#myModal4" class="btn btn-default  btn-sm">Salvar Modelo</button>



	</div>
	<div class="col-md-6" align=right>
		   <button type="button"  onclick="location.href='solicitacao.php?op=1'"  class="btn btn-sm btn-default" >Limpar</button>
		
  <button type="button"   onclick="window.open('imprimirsol.php')" class="btn btn-primary  btn-sm">Gerar Requisição</button>
  

		</div>	
		
		
		</div>
		
	</div>
						<div class="panel-body">

							
													<div class="col-sm-12">
						<br>						
								<div  align="left"><strong><font style="font-size:14px; face:Calibri">Nome: </strong><?php echo$_SESSION['nome_av'];?></font></div><br>
	
<table class="table2">
<?php
	

if (!empty($_SESSION['solicitacao'])) {
	echo '		<tr><td></br></td><td></td></tr>';
foreach ($_SESSION['solicitacao'] as $index=> $med){
	$num = $index+1;
echo '	
   <tr><td ><strong><font style="font-size:14px; face:Calibri">'. $num.'.</strong> '.nl2br($med).'</font></td><td align="right"><a href="solicitacao.php?delsol='.$index.'" style="text-decoration: none;"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="color: gray;"></span></a></td></tr>
  ';
}		
}
if  (empty($_SESSION['solicitacao']))  {echo '<tr><td colspan="2"><font style="color:gray;"><em>Solicitação em branco</em></font></td><td></td></tr>
<tr><td ><br></td></tr>';} 

?>
<form class="form-horizontal Form" <?php if (isset($_GET['id3'])) {echo 'action="solicitacao.php"';} else {echo 'action="functions/inserirsolicitacao.php"';} ?> id="Form" name="Form2" method="POST" autocomplete="off">		
		


<tr><td colspan=2>
<textarea  type="text" class="form-control"  id="busca2" onkeyup="buscaSol(this.value)"  placeholder="Item" required style="border:0 none;box-shadow: 0 0 0 0;padding-left:0px;padding-right:0px;font-size:12px;" name="sol"  required><?php if (isset($_GET['id3']))  {echo $droga;}?></textarea>
						  <div id="resultado2"></div>
</td></tr>
<tr><td  align=center colspan=2><button type="submit"  class="btn btn-sm btn-default"  style="font-size:14px;border:none;color:#3d72aa;">+ Adicionar Item</button></td></tr>
	
	
	
	
	</form>
	

	   
</table>
<br><br><br>
	
</div></div>

</div>			
</div>
<div class="col-md-3">


    <div class="panel panel-default">	

  <div class="panel-body" >
 
  <p  style="color:#3d72aa;font-size:12px;">
	Modelos</p>

<div class="list-group">
<?php 



	  $s = "SELECT * from modelo where fav=1 and idmd=$idmd ORDER BY NOME";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){
	$mdroga = unserialize($mod['modelo']);
foreach ($mdroga as $tipo => $array)
{ if ($tipo == 'solicitacao')

echo '<a href="solicitacao.php?idmod='.$mod['id'].'" class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">'.ucwords(strtolower($mod['nome'])).'</a>';

}	}

  
   ?>
</div>

  </div></div>


</div>
</div>
    </div>




<div id="myModal2" class="modal" tabindex="-1"  role="dialog">
  <div class="modal-dialog" style="width:40%;">
    <!-- Modal content-->
    <div class="modal-content" >
    <div class="modal-header">
    
        <h5 class="modal-title"><font style="color:#3d72aa;font-size:12px;">Modelos de solicitação</font></h5>
      </div>
      <div class="modal-body">
	    <ul class="list-group">
      <?php
	  $s = "SELECT * from modelo where idmd=$idmd";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){
	$mdroga = unserialize($mod['modelo']);
foreach ($mdroga as $tipo => $array)
{ if ($tipo == 'solicitacao') {
echo'
<li class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">'.$mod['nome'].
'<span class="badge" style="background-color:#ffffff;"><a href="functions/excluimodelo_solicitacao.php?id='.$mod['id'].'"><span class="glyphicon glyphicon-trash" style="color:#3d72aa;" aria-hidden="true"></span></a></span>
'; if ($mod['fav'] == 1){echo '
<span class="badge" style="background-color:#ffffff;"><a href="functions/desfavorito_mod.php?idmod='.$mod['id'].'&return=solicitacao"><span class="glyphicon glyphicon-star" style="color:#3d72aa;" aria-hidden="true"></span></a></span>';} 
else { echo'
<span class="badge" style="background-color:#ffffff;"><a href="functions/favorito_mod.php?idmod='.$mod['id'].'&return=solicitacao"><span class="glyphicon glyphicon-star-empty" style="color:#3d72aa;" aria-hidden="true"></span></a></span>
';}
echo '<span class="badge" style="background-color:#ffffff;"><a href="solicitacao.php?idmod='.$mod['id'].'"><span class="glyphicon glyphicon-download" style="color:#3d72aa;" aria-hidden="true"></span></a></span>
</li>
';
}	}}
?>
</ul>								
      </div>
 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
     
      </div>
    </div>

  </div>
</div>





<div id="myModal4" class="modal" tabindex="-1"  role="dialog">
  <div class="modal-dialog" style="width:40%;">
    <!-- Modal content-->
    <div class="modal-content" >    
      <div class="modal-body">      
			<form class="form-horizontal Form" action="functions/inserirmodelo_solicitacao.php"  id="Form4" name="Form4" method="POST" autocomplete="off">		
				<div class="form-group form-group-sm">			
					<div class="col-sm-12">					
						<font style="color:#3d72aa;font-size:12px;">Nome da Solicitação</font>						
						<input  type="text" class="form-control"  style="box-shadow: 0 0 0 0;padding-left:0px;padding-right:0px;font-size:12px;" name="nome" required>						
					</div>					
				</div>						
      </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
       <button type="submit" class="btn btn-primary btn-sm">Salvar</button></form>	
      </div>
    </div>
  </div>
</div>
<?php if (isset($_GET['fav'])) { 
echo'
<script>
$(document).ready(function(){
$(\'#myModal2\').modal(\'show\');
});
</script>';}
?>

</body></html>