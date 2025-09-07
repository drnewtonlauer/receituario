<?php 
if ( isset($_POST['med']) ){
 
   header('Location: receituario_ped_ev.php'); 
   

}
?>
<?php  

include"functions/config.php";

 

if (isset ($_GET['peso'])){
$_SESSION['peso_av'] = $_GET['peso'];  } 

$peso = $_SESSION['peso_av'];
 



?>
<!DOCTYPE html><html lang="pt-br"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
    <title>Drogas Pediátricas Injetáveis</title><?php include "favicon.php"; ?>
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

  </head>
<script>
$('.num').mask('0.00');
</script>
  <body>
<?php include "menu3.php"; ?>

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
  <button class="btn btn-default" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Peso: <?php echo $_SESSION['peso_av'];?> Kg <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
   
  </button>
 
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

<li><a href="receituario_ped_ev.php?peso=2">2 Kg </a></li>
<li><a href="receituario_ped_ev.php?peso=3">3 Kg </a></li>
<li><a href="receituario_ped_ev.php?peso=4">4 Kg </a></li>
<li><a href="receituario_ped_ev.php?peso=5">5 Kg </a></li>
<li><a href="receituario_ped_ev.php?peso=6">6 Kg </a></li>
<li><a href="receituario_ped_ev.php?peso=7">7 Kg </a></li>
<li><a href="receituario_ped_ev.php?peso=8">8 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=9">9 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=10">10 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=11">11 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=12">12 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=13">13 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=14">14 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=15">15 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=16">16 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=17">17 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=18">18 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=19">19 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=20">20 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=21">21 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=22">22 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=23">23 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=24">24 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=25">25 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=26">26 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=27">27 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=28">28 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=29">29 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=30">30 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=31">31 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=32">32 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=33">33 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=34">34 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=35">35 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=36">36 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=37">37 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=38">38 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=39">39 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=40">40 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=41">41 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=42">42 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=43">43 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=44">44 Kg </a></li>
<li ><a href="receituario_ped_ev.php?peso=45">45 Kg </a></li>

  
  
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



IF ($peso < 11){	
$volume_total = 100*$peso;
$nacl20 = 0.8823*$peso;
$kcl10 = 1.49*$peso;
$sg = $volume_total - ($nacl20 + $kcl10);

}

IF ($peso > 10 and $peso < 21){	
$volume_total = 1000+(50*($peso-10));
$nacl20 = 8.82+(0.441*$peso);
$kcl10 = 14.92+(0.746*$peso);
$sg = $volume_total - ($nacl20 + $kcl10);

}

IF ($peso > 20 ){	
$volume_total = (1500+(($peso-20)*20));
$nacl20 = ($peso*0.176)+13.23;
$kcl10 = ($peso*0.29)+22.4;
$sg = $volume_total - ($nacl20 + $kcl10);

}


$sg = $sg/4;
$kcl10 = $kcl10/4;
$nacl20 = $nacl20/4;
	echo '	
	
	   
<tr><td colspan=2><strong><font style="font-size:14px; face="Calibri">APORTE HOLLIDAY SEGAR</font></strong></td><td align="right"></td></tr>
<tr><td colspan="4" ><font style="font-size:12px; face="Calibri">SG5% <strong>'.number_format($sg, 1, ',', '.').'</strong> ML + NACL20% <strong>'.number_format($nacl20, 1, ',', '.').'</strong> ML + KCL10% <strong>'.number_format($kcl10, 1, ',', '.').'</strong> ML</font></td></tr>
<tr><td colspan="4"><br></td></tr>';




	
$r = "SELECT * from medicamento_ped_ev order by nome";
$r_events = mysqli_query($conn, $r);

while ($drog = mysqli_fetch_array($r_events)){
	$med = unserialize($drog['medicamento']);


$dose = ($drog['calc'] * $peso);	

	echo '	
	
   <tr><td colspan=2><strong><font style="font-size:14px; face="Calibri">'.$med['med'].'</font></strong></td><td align="right">
   <font style="font-size:14px; face="Calibri"></td><td align="right"></td></tr>
   <tr><td colspan="4" ><font style="font-size:12px; face="Calibri">'.number_format(floatval($dose), 1, ',', '').' '.nl2br($med['pos']).'</font></td></tr>
    <tr><td colspan="4"><br></td></tr>';
}




?>
</table>
</div>
</div>

</div>
</div>			

	
<div class="col-md-2">
			</div>

</div>
</div>
    </div>


</body></html>