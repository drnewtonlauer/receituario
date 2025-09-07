<?php 
if ( isset($_POST['med']) ){
 
   header('Location: receituario_ped.php'); 
   

}
 
include"verificalogin.php";
include"functions/config.php";

$idmd = $_SESSION['UsuarioID'];

if (isset ($_GET['peso'])){
$_SESSION['peso_av'] = $_GET['peso'];  } 

$peso = $_SESSION['peso_av'];
 
if (isset ($_GET['idade'])){
$_SESSION['idade_av'] = $_GET['idade'];  } 


$idade = $_SESSION['idade_av'];



if (isset($_GET['op'])){
unset($_SESSION['receita_ped']);	
		
}


 
if (empty($_SESSION['receita_ped'])) {
$_SESSION['receita_ped'] = [];
}


//------------------------------------------------------------------------------------
//pega medicamento inserido agora
if (isset($_GET['id'])){
$id = $_GET['id'];
$r = "SELECT * from medicamento_ped where id='$id'";
$r_events = mysqli_query($conn, $r);
$drog = mysqli_fetch_array($r_events) ;	
$droga = unserialize($drog['medicamento']);
$droga['calc'] = $drog['calc'];

if (isset($_SESSION['chave'])){
$chave=$_SESSION['chave'];	
$_SESSION['receita_ped'][$chave] = $droga;	
unset($_SESSION['chave']);
}
		else {
$_SESSION['receita_ped'][] = $droga;
}}


//pega medicamento do modal modificado banco
if (isset($_POST['med'])){
	


$droga['via']=$_POST['via'];
$droga['med']=$_POST['med'];
if (empty($_POST['qtd'])){
	$droga['qtd']=' ';
} else {
$droga['qtd']=$_POST['qtd'];}	
$droga['pos']=$_POST['pos'];
$droga['calc']=$_POST['calc'];
if (isset($_SESSION['chave'])){
$chave=$_SESSION['chave'];	
$_SESSION['receita_ped'][$chave] = $droga;	
unset($_SESSION['chave']);
}		else {
$_SESSION['receita_ped'][] = $droga;
}
ksort($_SESSION['receita_ped']);
}

//pega medicamento do banco para modal
if (isset($_GET['id2'])){
$id = $_GET['id2'];
$r = "SELECT * from medicamento_ped where id='$id'";
$r_events = mysqli_query($conn, $r);
$drog = mysqli_fetch_array($r_events) ;	
$droga = unserialize($drog['medicamento']);
	if (empty($droga['via'])){
	$droga['via']='';	
	}
	
}

//remove medicamento
if (isset($_GET['del'])){
	$del = $_GET['del'];
unset ($_SESSION['receita_ped'][$del]);
$_SESSION['receita_ped'] = array_values ($_SESSION['receita_ped']);
 header ('Location: receituario_ped.php');
}

//edita
if (isset($_GET['edit'])){
	$edit = $_GET['edit'];
	$_SESSION['chave'] = $_GET['edit'];
$droga = $_SESSION['receita_ped'][$edit]; 

unset ($_SESSION['receita_ped'][$edit]);


//$_SESSION['receita_ped'] = array_values ($_SESSION['receita_ped']);



}

//----------------------------------------------------------------------------------------

//var_dump($_SESSION['chave'] );




//-----------------------------------------------------------------------------------------
//pega modelo
if (isset($_GET['idmod'])){
$id = $_GET['idmod'];
$k = "SELECT * from modelo_ped where id='$id'";
$k_events = mysqli_query($conn, $k);
$mdrog = mysqli_fetch_array($k_events) ;	
$mdroga = unserialize($mdrog['modelo']);

foreach ($mdroga as $tipo => $array_U)
{ 
foreach ($array_U as $arr => $array2){


array_push($_SESSION['receita_ped'], $array2); }}
 header ('Location: receituario_ped.php');
}


//--------------------------------------------------------------------------------------------




?>
<!DOCTYPE html><html lang="pt-br"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
     <title>Receituário Pediátrico</title><?php include "favicon.php"; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src='js/moment.min.js'></script>	
	

  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>	
	
	<script type="text/javascript" src="functions/funcs.js"></script>
	<script src='js/jQuery-Mask-Plugin/dist/jquery.mask.min.js'></script>

<link href='css/chosen.min.css' rel='stylesheet' type='text/css'>
<script src='js/chosen.jquery.min.js' type='text/javascript'></script>

	
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



.chosen-container .chosen-results {
    max-height:500px;
	
}
  </style>	
<script>
$('.num').mask('0.00');
</script>
  </head>

  <body onLoad="document.Form.med.focus();" >
<?php include "menu.php"; ?>

 <div class="jumbotron" style="background-color: transparent;  background: transparent; position:responsive; top:30px" > 
		<div class="container">
			<div class="row">
				<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">
	<div class="row">
	<div class="col-md-8" align=left>
			
  <button type="button"  data-toggle="modal" data-target="#myModal2" class="btn btn-default  btn-sm">Modelos</button>
   <button type="button"  data-toggle="modal" data-target="#myModal3" class="btn btn-default  btn-sm">Salvar Modelo</button>
  <div class="btn-group">
  <button class="btn btn-default  btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Peso: <?php echo $_SESSION['peso_av'];?> Kg <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
   
  </button>
 

  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="height:300px; overflow-y:scroll;">

<li style="font-size:12px;"><a href="receituario_ped.php?peso=2">2 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=3">3 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=4">4 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=5">5 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=6">6 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=7">7 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=8">8 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=9">9 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=10">10 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=11">11 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=12">12 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=13">13 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=14">14 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=15">15 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=16">16 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=17">17 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=18">18 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=19">19 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=20">20 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=21">21 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=22">22 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=23">23 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=24">24 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=25">25 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=26">26 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=27">27 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=28">28 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=29">29 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=30">30 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=31">31 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=32">32 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=33">33 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=34">34 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=35">35 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=36">36 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=37">37 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=38">38 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=39">39 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=40">40 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=41">41 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=42">42 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=43">43 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=44">44 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped.php?peso=45">45 Kg </a></li>

  
  
  </ul>
</div>


	</div>
	<div class="col-md-4" align=right>
		   <button type="button"  onclick="location.href='receituario_ped.php?op=1'"  class="btn btn-sm btn-default" >Limpar</button>
	
  <button type="button"   onclick="window.open('imprimirrec_ped.php')" class="btn btn-primary  btn-sm">Gerar Receituário</button>
 

		</div>	
		
		
		</div>
</div>	
						<div class="panel-body">


							
							<div class="col-sm-12">
							
				<br>
								<div  align="left"><strong><font style="font-size:14px; face:Calibri">Nome: </strong><?php echo $_SESSION['nome_av'];?> </font></div><br><br>
	
<table class="table2" border="0">
<?php
	
if (!empty($_SESSION['receita_ped'])) {


foreach ($_SESSION['receita_ped'] as $index=> $med){

$num = $index +1;

$dose = ($med['calc'] * $peso);	

	echo '	
	
   <tr><td colspan=2><strong><font style="font-size:14px; face="Calibri">'.$num.'. '.$med['med'].'</font></strong></td><td align="right"><font style="font-size:14px; face="Calibri">'.$med['qtd'].' </td><td align="right">
   <a href="receituario_ped.php?del='.$index.'" style="text-decoration: none;"></font><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color: gray;"></span></a>&nbsp
   <a href="receituario_ped.php?edit='.$index.'" style="text-decoration: none;"></font><span class="glyphicon glyphicon-edit" aria-hidden="true" style="color: gray;"></span></a></td></tr>
   <tr><td colspan="4" ><font style="font-size:12px; face="Calibri">';  echo nl2br($med['pos']).'</font></td></tr>
    <tr><td colspan="4"><br></td></tr>';
}
}


if (empty($_SESSION['receita_ped'])) {echo '<tr><td colspan="3"><font style="color:gray;"><em>Receita em branco</em></font></td></tr>
<tr><td colspan=3><br></td></tr>';} 

?>
<tr><td colspan=3><br></td></tr>
<form class="form-horizontal Form" action="receituario_ped.php" id="Form" name="Form" method="POST" autocomplete="off">		
			


<tr><td colspan=2 width=75%><input  type="text" class="form-control"  style="border:0 none;box-shadow: 0 0 0 0;padding-left:0px;padding-right:0px;font-size:14px; face:Calibri;color:gray;" 
  id="busca" onkeyup="buscaDroga_ped(this.value)"   placeholder="Medicamento" required  name="med" <?php if (isset($_GET['id2']) or isset($_GET['edit']))  {echo 'value="'.$droga['med'].'"';}?>>
<div id="resultado"></div></td>

<td align="right" width=18%>
<input   type="text" class="form-control"  style="border:0 none;box-shadow: 0 0 0 0;padding-left:0px;padding-right:0px;text-align:right;font-size:14px; face:Calibri;color:gray;"  placeholder="Quantidade" 
name="qtd" <?php if (isset($_GET['id2']) or isset($_GET['edit']))  {echo 'value="'.$droga['qtd'].'"';} ?> >					
</td>
</tr>
<tr><td colspan="3">


<div class="input-group"  style="width:100%">
  <textarea class="form-control" rows="5"  style="border:0 none;box-shadow: 0 0 0 0;padding-left:4px;font-size:12px;face:Calibri;color:gray;"  style="face:Calibri;"  
name="pos"  placeholder="Posologia" required><?php if (isset($_GET['id2'])) {if ($drog['calc']!=0) { $dose = ($drog['calc'] * $peso);	echo 'DAR '.round($dose).' ';}} if (isset($_GET['id2']) or isset($_GET['edit']))  { echo $droga['pos'];}?></textarea>
</div>


<?php if (isset($_GET['edit']))  {echo '<input   type="hidden" name="chave" value="'.$edit.'">';} ?>
</td>




</tr>

<tr><td colspan="3">

<div class="input-group">

 <input  type="hidden" placeholder="_" class="form-control num" required style="padding-left:4px;border:0 none;box-shadow: 0 0 0 0;font-size:12px;" name="calc" <?php if (isset($_GET['id2']))  {echo 'value="'.$drog['calc'].'"';} else {echo 'value="0"';}?> required >

</div>


</td>


</tr>

<tr><td colspan="3" align=center><button type="submit"  class="btn btn-sm btn-default"  style="font-size:14px;border:none;color:#3d72aa;">+ Adicionar Medicamento</button></td></tr>
	
	
	
	
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
	Receitas Pediátricas</p>

<div class="list-group">
<?php $w = "SELECT * from modelo_ped where fav=1  and idmd=$idmd ORDER BY NOME" ;
$resultad_event = mysqli_query($conn, $w);
while($res = mysqli_fetch_array($resultad_event))	{
	$type = unserialize($res['modelo']);
	foreach ($type as $tipo => $array)
{ if ($tipo == 'receita'){
echo '<a href="receituario_ped.php?idmod='.$res['id'].'"  class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">'.ucwords(strtolower($res['nome'])).'</a>';
}}}
  
   ?>
</div>

  </div></div>					

							
</div>			


</div>
</div>
    </div>



<div id="myModal2" class="modal" tabindex="-1"  role="dialog">
  <div class="modal-dialog" style="width:40%;">
    <!-- Modal content-->
    <div class="modal-content" >
    <div class="modal-header">
       
        <h5 class="modal-title"><font style="color:#3d72aa;font-size:12px;">Receitas Pediátricas</font></h5>
      </div>
      <div class="modal-body">
	  <ul class="list-group">
      <?php
	  $s = "SELECT * from modelo_ped  where idmd=$idmd";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){
$mdroga = unserialize($mod['modelo']);

foreach ($mdroga as $tipo => $array)
{ if ($tipo == 'receita')
echo'
<li class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">'.$mod['nome'].
'<span class="badge" style="background-color:#ffffff;"><a href="functions/excluimodelo_receita_ped.php?id='.$mod['id'].'"><span class="glyphicon glyphicon-trash" style="color:#3d72aa;" aria-hidden="true"></span></a></span>
'; if ($mod['fav'] == 1){echo '
<span class="badge" style="background-color:#ffffff;"><a href="functions/desfavorito_mod_ped.php?idmod='.$mod['id'].'"><span class="glyphicon glyphicon-star" style="color:#3d72aa;" aria-hidden="true"></span></a></span>';} 
else { echo'
<span class="badge" style="background-color:#ffffff;"><a href="functions/favorito_mod_ped.php?idmod='.$mod['id'].'"><span class="glyphicon glyphicon-star-empty" style="color:#3d72aa;" aria-hidden="true"></span></a></span>
';}
echo '<span class="badge" style="background-color:#ffffff;"><a href="receituario_ped.php?idmod='.$mod['id'].'"><span class="glyphicon glyphicon-download" style="color:#3d72aa;" aria-hidden="true"></span></a></span>
</li>';
}	}
?>
</ul>								
      </div>
 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>     
      </div>
    </div>
  </div>
</div>

<div id="myModal3" class="modal" tabindex="-1"  role="dialog">
  <div class="modal-dialog" style="width:40%;">
    <!-- Modal content-->
    <div class="modal-content" >    
      <div class="modal-body">      
			<form class="form-horizontal Form" action="functions/inserirmodelo_receita_ped.php"  id="Form3" name="Form2" method="POST" autocomplete="off">		
				<div class="form-group form-group-sm">			
					<div class="col-sm-12">					
						<font style="color:#3d72aa;font-size:12px;">Nome da Prescrição</font>						
						<input  type="text" class="form-control" style="box-shadow: 0 0 0 0;padding-left:0px;padding-right:0px;font-size:12px;"  name="nome" required>						
					</div>					
				</div>						
      </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
       <button type="submit" class="btn btn-primary btn-sm" >Salvar</button></form>	
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