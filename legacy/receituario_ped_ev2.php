<?php 
if ( isset($_POST['med']) ){
 
   header('Location: receituario_ped_ev.php'); 
   

}
?>
<?php  
include"verificalogin.php";
include"functions/config.php";

 

if (isset ($_GET['peso'])){
$_SESSION['peso_av'] = $_GET['peso'];  } 

$peso = $_SESSION['peso_av'];
 



?>
<!DOCTYPE html><html lang="pt-br"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
    <title>Drogas Pediátricas Injetáveis</title><?php include "favicon.php"; ?>

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

  </head>
<script>
$('.num').mask('0.00');
</script>
  <body>
<?php include "menu.php"; ?>

 <div class="jumbotron" style="background-color: transparent;  background: transparent; position:responsive; top:30px" > 
		<div class="container">
			<div class="row">
			<div class="col-md-2">
			</div>
				<div class="col-md-8">
	<div class="panel panel-default">
		<div class="panel-heading">
	<div class="row">
	<div class="col-md-8" align=left>
			

  <div class="btn-group">
  <button class="btn btn-default  btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Peso: <?php echo $_SESSION['peso_av'];?> Kg <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
   
  </button>
 

  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" >

<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=2">2 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=3">3 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=4">4 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=5">5 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=6">6 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=7">7 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=8">8 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=9">9 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=10">10 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=12">12 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=14">14 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=16">16 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=18">18 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=20">20 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=25">25 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=30">30 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=35">35 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=40">40 Kg </a></li>
<li style="font-size:12px;"><a href="receituario_ped_ev.php?peso=45">45 Kg </a></li>


  
  
  </ul>
</div>


	</div>
	<div class="col-md-4" align=right>

		</div>	
		
		
		</div>
</div>	
						<div class="panel-body">


							
							<div class="col-sm-12">
							
				<br>
								
<table class="table2" border="0">
<?php
	
$r = "SELECT * from medicamento_ped_ev order by nome";
$r_events = mysqli_query($conn, $r);

while ($drog = mysqli_fetch_array($r_events)){
	$med = unserialize($drog['medicamento']);


$dose = ($drog['calc'] * $peso);	

	echo '	
	
   <tr><td colspan=2><strong><font style="font-size:14px; face="Calibri">'.$med['med'].'</font></strong></td><td align="right">
   <font style="font-size:14px; face="Calibri"></td><td align="right"><a href="functions/excluir_ped_ev.php?id='.$drog['id'].'" style="text-decoration: none;"></font>
   <span class="glyphicon glyphicon-minus" aria-hidden="true" style="color: gray;"></span></a></td></tr>
   <tr><td colspan="4" ><font style="font-size:12px; face="Calibri">'.number_format(floatval($dose), 1, ',', '').' '.nl2br($med['pos']).'</font></td></tr>
    <tr><td colspan="4"><br></td></tr>';
}




?>
</table>
</div>
</div>
<div class="panel-footer" style="background:#ffffff;">
<table class="table2" border="0">
<form class="form-horizontal Form" action="functions/inserirmedicamento_ped_ev.php" id="Form" name="Form" method="POST" autocomplete="off">		
			


<tr><td colspan=2 width=70%><input  type="text" class="form-control"  style="border:0 none;box-shadow: 0 0 0 0;padding-left:0px;padding-right:0px;" style="font-size:14px; face:Calibri;"  "   placeholder="Medicamento" required  name="med" >
</td>

<td align="right">
</td>
</tr>
<tr><td colspan="3">

<textarea class="form-control" rows="1"  style="border:0 none;box-shadow: 0 0 0 0;padding-left:5px;padding-right:0px;padding-bottom:0px;font-size:12px;"  style=" face:Calibri;"  
name="pos"  placeholder="Posologia" required><?php if (isset($_GET['id2']))  {echo $droga['pos'];}?></textarea>			

</td></tr>
<tr><td colspan="3" >
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1" style="padding-left:0px;padding-right:0px;text-align:right;border:0 none;background:#ffffff;"><font style="font-size:12px;color:gray;">Cálculo: peso X</font></span>
 <input  type="text" placeholder="_" class="form-control num" required style="padding-left:4px;border:0 none;box-shadow: 0 0 0 0;font-size:12px;" name="calc" <?php if (isset($_GET['id2']))  {echo 'value="'.$drog['calc'].'"';}?> required >

</div>

</td><td >
				
</td></tr>
<tr><td colspan="3" align=center><button type="submit"  class="btn btn-sm btn-default"  style="font-size:14px;border:none;color:#3d72aa;">+ Cadastrar Droga</button></td></tr>
	
	
	
	
	</form>
	
   
	   
</table>

		

<br>
	
</div>
</div>
</div>			

	
<div class="col-md-2">
			</div>

</div>
</div>
    </div>


</body></html>