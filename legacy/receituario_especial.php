<?php 
if (isset($_POST['via']) or isset($_POST['med']) or isset($_POST['qtd']) or isset($_POST['pos']) ){
 
   header('Location: receituario_especial.php'); 
   

}
?>
<?php  
include"verificalogin.php";
include"functions/config.php";






if (empty($_SESSION['receita'])) {
$_SESSION['receita'] = [];
}

if (empty($_SESSION['txt'])) {
$_SESSION['txt'] = [];
}

if (isset($_GET['op'])){
unset($_SESSION['receita']);	
unset($_SESSION['txt']);
unset($_SESSION['nome_av']);
if (empty($_SESSION['nome_av'])) {$_SESSION['nome_av']='';}
$_SESSION['nome_av'] = $_SESSION['nome_av'];		
}

if (isset($_GET['op2'])){
unset($_SESSION['receita']);	
unset($_SESSION['txt']);	
unset($_SESSION['nome_av']);	

} 
	
//------------------------------------------------------------------------------------
//pega medicamento inserido agora
if (isset($_GET['id'])){
$id = $_GET['id'];
$r = "SELECT * from medicamento where id='$id'";
$r_events = mysqli_query($conn, $r);
$drog = mysqli_fetch_array($r_events) ;	
$droga = unserialize($drog['medicamento']);
	

$_SESSION['receita'][] = $droga;

}


//pega medicamento do modal modificado banco
if (isset($_POST['med'])){

$droga['via']=$_POST['via'];
$droga['med']=$_POST['med'];
$droga['qtd']=$_POST['qtd'];	
$droga['pos']=$_POST['pos'];	
$_SESSION['receita'][] = $droga;
}

//pega medicamento do banco para modal
if (isset($_GET['id2'])){
$id = $_GET['id2'];
$r = "SELECT * from medicamento where id='$id'";
$r_events = mysqli_query($conn, $r);
$drog = mysqli_fetch_array($r_events) ;	
$droga = unserialize($drog['medicamento']);
	if (empty($droga['via'])){
	$droga['via']='';	
	}
	if (empty($drog['classe'])){
	$drog['classe']='';	
	}
}

//remove medicamento
if (isset($_GET['del'])){
	$del = $_GET['del'];
unset ($_SESSION['receita'][$del]);
$_SESSION['receita'] = array_values ($_SESSION['receita']);
}

//----------------------------------------------------------------------------------------





//pega txt 
if (isset($_POST['txt'])){

$_SESSION['txt'] = $_POST['txt'];
}


//remove txt
if (isset($_GET['deltxt'])){
	
unset ($_SESSION['txt']);

}
//-----------------------------------------------------------------------------------------
//pega modelo
if (isset($_GET['idmod'])){
$id = $_GET['idmod'];
$k = "SELECT * from modelo where id='$id'";
$k_events = mysqli_query($conn, $k);
$mdrog = mysqli_fetch_array($k_events) ;	
$mdroga = unserialize($mdrog['modelo']);
foreach ($mdroga as $tipo => $array)
{
foreach ($array as $arr => $array2){
	if (empty($array2['via'])){
	$array2['via']='';	
	}
if (empty($_SESSION[$tipo])) {
$_SESSION[$tipo] = [];
} 
array_push($_SESSION[$tipo], $array2); }}

}


//--------------------------------------------------------------------------------------------





?>
<!DOCTYPE html><html lang="pt-br"><head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Med Lauer</title><?php include "favicon.php"; ?><?php include "favicon.php"; ?>

	<script src='js/moment.min.js'></script>	
	

  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>	
	
	<script type="text/javascript" src="functions/funcs.js"></script>
	

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

.xx {
  border-style: solid;
  border-bottom-width: 0;
  border-top-width: 1px;
  border-right-width: 0;
  border-left-width: 0;
}

.chosen-container .chosen-results {
    max-height:500px;
	
}
  </style>	

  </head>

  <body>


 <div class="jumbotron" style="background-color: transparent;  background: transparent; position:responsive; top:30px" > 
		<div class="container">
			<div class="row">
				<div class="col-md-8">
	<div class="panel panel-default">	
						<div class="panel-body"><br>

	<br>
<div class="col-sm-6">
<table width="100%" border="0" style="border-width: medium;border-style: solid;border-color:black;">
	<tr><td colspan="2" style="padding: 2px 10px 2px 10px;" align="center"><strong>IDENTIFICAÇÃO DO EMITENTE</strong></td></tr>
	
<tr><td  style="padding: 2px 10px 2px 10px;" width="110px"><strong>Nome:</strong></td><td> <?php echo $md['nomemd'];?></td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><strong>CRM:</strong></td><td><?php echo $md['crm'];?></td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><strong>Endereço:</strong></td><td> Av Mendonça Furtado, N 2411</td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><strong>Telefone:</strong></td><td> (93) 99220-1155</td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><strong>Cidade e UF:</strong> </td><td>Santarém - PA</td></tr>
	</table>
</div>
<div class="col-sm-6">	

	
	
<table width="100%" border="0" >
	<tr><td style="padding: 2px 10px 2px 10px;" align="center"><strong>RECEITUÁRIO DE CONTROLE ESPECIAL</strong></td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><strong>DATA:</strong> <?php echo date('d/m/Y'); ?> </td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><strong>1ª VIA FARMÁCIA<br>2ª VIA PACIENTE</strong> </td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><strong></strong> </td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><br></td></tr>
<tr  Style="border-bottom:2px solid black; border-collapse: collapse;"><td  style="padding: 2px 10px 2px 10px;"><br></td></tr>
 	<tr><td style="padding: 2px 10px 2px 10px;" align="center"><strong>ASSINATURA</strong></td></tr>
</table>						
</div>							<div class="col-sm-12">
								<div  align="left"><strong><font size="4" face="Calibri" >Nome: </strong><?php echo $_SESSION['nome_av'];?></font><br>
								<strong><font size="4" face="Calibri" >Endereço: </strong></font></div><br><br>
	
<table class="table2">
<?php
	
if (!empty($_SESSION['receita'])) {
foreach ($_SESSION['receita'] as $index=> $med){
	$viaadm[] = $med['via'];
$viaadmx = array_count_values($viaadm);	
}

foreach ($viaadmx as $via => $qtdvia) {
	echo'<tr><td colspan=2 align=center><strong>'.$via.'</strong></td></tr>
	<tr><td colspan=2 align=center><br></td></tr>';
foreach ($_SESSION['receita'] as $index=> $med){
if ($med['via'] == $via){
$num = $index +1;	
	echo '	
	
   <tr><td ><strong>'.$num.'. '.$med['med'].'</strong></td><td align="right">'.$med['qtd'].' <a href="receituario.php?del='.$index.'" style="text-decoration: none;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" style="color: gray;"></span></a></td></tr>
   <tr><td colspan="2" class="xx">'.nl2br($med['pos']).'</td></tr>
    <tr><td colspan="2"><br></td></tr>';
}	
}


}
 
}


if (!empty($_SESSION['txt'])) {


echo '	
	
   <tr><td >'.nl2br($_SESSION['txt']).'<a href="receituario.php?deltxt=1" style="text-decoration: none;"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" style="color: gray;"></span></a></td></tr>
    <tr><td colspan="2"><br></td></tr>';

}


if (empty($_SESSION['receita'])  and (empty($_SESSION['txt']))) {echo '<tr><td colspan="2"><font style="color:gray;"><em>Receita em branco</em></font></td></tr>
<tr><td ><br></td></tr>';} 

?>

</table>
<br><br><br><br><br><br>
<div class="col-sm-6">
<table width="100%" border="0" style="border-width: medium;border-style: solid;border-color:black;">
	<tr><td colspan="2" style="padding: 2px 10px 2px 10px;" align="center"><strong>IDENTIFICAÇÃO DO COMPRADOR</strong></td></tr>
	
<tr><td  style="padding: 2px 10px 2px 10px;" width="110px"><strong>Nome:</strong></td><td> </td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><strong>RG:</strong> </td><td></td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><strong>Endereço:</strong></td><td> </td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><strong>Telefone:</strong></td><td> </td></tr>
<tr><td  style="padding: 2px 10px 2px 10px;"><strong>Cidade e UF:</strong> </td><td></td></tr>
	</table>
</div>
<div class="col-sm-6">	

	
	
<table width="100%" border="0" style="border-width: medium;border-style: solid;border-color:black;">
	<tr><td style="padding: 2px 10px 2px 10px;" align="center"><strong>IDENTIFICAÇÃO DO FORNCEDOR</strong></td></tr>
	<tr><td  style="padding: 0px 10px 0px 10px;"><br></td></tr>
	<tr><td  style="padding:0px 10px 0px 10px;"  align="center">_________________________________<BR><strong>DATA:</strong></td></tr>


<tr><td  style="padding: 0px 10px 0px 10px;"><br></td></tr>
<tr><td  style="padding: 0px 10px 0px 10px;" align="center">_________________________________<BR><strong>ASSINATURA DO FARMACÊUTICO</strong></td></tr>
 
</table>						
</div>	

</div></div>
<BR><BR><BR>
</div>			
</div>
<div class="col-md-4">
  <div class="panel panel-default">
		<div class="panel-heading" style="background-color: #2980b9;"><font color="white">Receituário</font></div>
  <div class="panel-body">
  <div class="list-group" style="font-size:12px;  ">

<button type="button"  class="list-group-item" data-dismiss="modal" onclick="location.href='imprimirrec_especial.php'" style="padding-bottom: 6px; padding-top: 6px;font-size:12px;">Imprimir</button>	
<button type="button"  class="list-group-item" data-dismiss="modal" onclick="location.href='receituario.php'" style="padding-bottom: 6px; padding-top: 6px;font-size:12px;">Receituário Comum</button>
 <button type="button" onclick="window.close()"class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:12px;">Sair</button>
</div></div></div>	


  <div class="panel panel-default">
		<div class="panel-heading" style="background-color: #2980b9;"><font color="white">Inserir</font></div>
  <div class="panel-body">
  <div class="list-group" style="font-size:12px;  ">
<button type="button" class="list-group-item" data-toggle="modal" data-target="#myModal" style="padding-bottom: 6px; padding-top: 6px;font-size:12px;">Medicamento</button></a>
<button type="button" class="list-group-item" data-toggle="modal" data-target="#myModal2" style="padding-bottom: 6px; padding-top: 6px;font-size:12px;">Modelo de prescrição</button></a>
<button type="button" class="list-group-item" data-toggle="modal" data-target="#myModal3" style="padding-bottom: 6px; padding-top: 6px;font-size:12px;">Salvar como modelo</button></a>
</div></div></div>

					

							
</div>			


</div>
</div>
    </div>

<div id="myModal" class="modal" >
  <div class="modal-dialog" role="document" style="width:40%;">
    <!-- Modal content-->
    <div class="modal-content" >
       <div class="modal-body">  
			<form class="form-horizontal Form" <?php if (isset($_GET['id2'])) {echo 'action="receituario.php"';} else {echo 'action="functions/inserirmedicamento.php"';} ?> id="Form" name="Form" method="POST" autocomplete="off">		
				<div class="form-group form-group-sm">			
					<div class="col-sm-9">					
						<font style="color:#3d72aa;font-size:12px;">Medicamento</FONT>						
							  <input  type="text" class="form-control"  id="busca" onkeyup="buscaDroga(this.value)"  placeholder="Ex: Dipirona 500mg" required style="border:0 none;box-shadow: 0 0 0 0;" name="med" <?php if (isset($_GET['id2']))  {echo 'value="'.$droga['med'].'"';}?> required >
						  <div id="resultado"></div>
					</div>	
					<div class="col-sm-3">					
					<font style="color:#3d72aa;font-size:12px;">Quantidade</FONT>											
					<input   type="text" class="form-control" placeholder="Ex: 2 Caixas" required style="border:0 none;box-shadow: 0 0 0 0;" name="qtd" <?php if (isset($_GET['id2']))  {echo 'value="'.$droga['qtd'].'"';}?> required>					
					</div>					
				</div>
				<div class="form-group form-group-sm">					
					<div class="col-sm-12">					
					<font style="color:#3d72aa;font-size:12px;">Posologia</FONT>	
						<textarea class="form-control" rows="3" placeholder="Ex: Tomar 1 comprimido de 6 em 6 horas." required style="border:0 none;box-shadow: 0 0 0 0;" name="pos"  required><?php if (isset($_GET['id2']))  {echo $droga['pos'];}?></textarea>			
					</div>			
				</div>						
				<div class="form-group form-group-sm">					
					<div class="col-sm-12">					
					<font style="color:#3d72aa;font-size:12px;">Via de administração</FONT>	
					<select class="form-control" required style="border:0 none;box-shadow: 0 0 0 0;"  name="via" required>
					<option hidden disabled selected value="">Selecione</option>				
							  <option value="Uso Intravenoso" <?php if (isset($_GET['id2']) and $droga['via']=='Uso Intravenoso')  {echo 'selected';}?> >Uso Intravenoso</option>
							  <option value="Uso Itramuscular" <?php if (isset($_GET['id2']) and $droga['via']=='Uso Itramuscular')  {echo 'selected';}?>>Uso Itramuscular</option>
							   <option value="Uso Nasal" <?php if (isset($_GET['id2']) and $droga['via']=='Uso Nasal')  {echo 'selected';}?>>Uso Nasal</option>
								<option value="Uso Ocular" <?php if (isset($_GET['id2']) and $droga['via']=='Uso Ocular')  {echo 'selected';}?>>Uso Ocular</option>
							  <option value="Uso Oral" <?php if (isset($_GET['id2']) and $droga['via']=='Uso Oral')  {echo 'selected';}?>>Uso Oral</option>
							  <option value="Uso Retal" <?php if (isset($_GET['id2']) and $droga['via']=='Uso Retal')  {echo 'selected';}?>>Uso Retal</option>
							  <option value="Uso Subcutâneo" <?php if (isset($_GET['id2']) and $droga['via']=='Uso Subcutâneo')  {echo 'selected';}?>>Uso Subcutâneo</option> 
							  <option value="Uso Tópico" <?php if (isset($_GET['id2']) and $droga['via']=='Uso Tópico')  {echo 'selected';}?>>Uso Tópico</option> 
							  <option value="Uso Vaginal" <?php if (isset($_GET['id2']) and $droga['via']=='Uso Vaginal')  {echo 'selected';}?>>Uso Vaginal</option> 
					</select>
					</div>					
				</div>								
      </div>	  
  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
       <button type="submit" class="btn btn-primary" >Adicionar</button></form>	
      </div>
    </div>
  </div>
</div>

<div id="myModal2" class="modal" tabindex="-1"  role="dialog">
  <div class="modal-dialog" style="width:40%;">
    <!-- Modal content-->
    <div class="modal-content" >
    <div class="modal-header">
       
        <h5 class="modal-title"><font style="color:#3d72aa;font-size:12px;">Prescrições Salvas</font></h5>
      </div>
      <div class="modal-body">
	    <div class="list-group" style="font-size:12px;  ">
      <?php
	  $s = "SELECT * from modelo";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){
$mdroga = unserialize($mod['modelo']);

foreach ($mdroga as $tipo => $array)
{ if ($tipo == 'receita')
echo'
<a href="receituario.php?idmod='.$mod['id'].'"><button type="button" class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:12px;">'.$mod['nome'].'</button></a>';
}	}
?>
</div>								
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
			<form class="form-horizontal Form" action="functions/inserirmodelo_receita.php"  id="Form3" name="Form2" method="POST" autocomplete="off">		
				<div class="form-group form-group-sm">			
					<div class="col-sm-12">					
						<font style="color:#3d72aa;font-size:12px;">Nome da Prescrição</font>						
						<input  type="text" class="form-control"  name="nome" required>						
					</div>					
				</div>						
      </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
       <button type="submit" class="btn btn-primary" >Salvar</button></form>	
      </div>
    </div>
  </div>
</div>


<?php if (isset($_GET['id2'])) { echo'
<script>
$(document).ready(function(){
$(\'#myModal\').modal(\'show\');
});
</script>';}
?>
<script type="text/javascript">
$(document).ready(function(){
 $('#select2').chosen({ width:'100%', no_results_text: "Não encontrado" });
});
</script>
</body></html>