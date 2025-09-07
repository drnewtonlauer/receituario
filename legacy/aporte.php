<?php  include"functions/config.php";
session_start();
if (isset($_POST['peso'])  ){   header('Location: aporte.php');  }

if (empty($_SESSION['ap_peso'])){$_SESSION['ap_peso']='';}
if (empty($_SESSION['ap_oh'])){$_SESSION['ap_oh']='';}
if (empty($_SESSION['ap_vig'])){$_SESSION['ap_vig']='';}

if (empty($_SESSION['ap_na'])){$_SESSION['ap_na']='';}
if (empty($_SESSION['ap_k'])){$_SESSION['ap_k']='';}
if (empty($_SESSION['ap_ca'])){$_SESSION['ap_ca']='';}
if (empty($_SESSION['ap_mg'])){$_SESSION['ap_mg']='';}

if (empty($_SESSION['conc_na'])){$_SESSION['conc_na']='1.7';}
if (empty($_SESSION['conc_k'])){$_SESSION['conc_k']='1.34';}
if (empty($_SESSION['conc_ca'])){$_SESSION['conc_ca']='100';}
if (empty($_SESSION['conc_mg'])){$_SESSION['conc_mg']='0.8';}

if (empty($_SESSION['glicose'])){$_SESSION['glicose']='1';}


if (isset($_GET['op']) and $_GET['op']=='novo'){
$_SESSION['ap_peso']='';
$_SESSION['ap_oh']='';
$_SESSION['ap_vig']='';

$_SESSION['ap_na']='';
$_SESSION['ap_k']='';
$_SESSION['ap_ca']='';
$_SESSION['ap_mg']='';

$_SESSION['conc_na']='1.7';
$_SESSION['conc_k']='1.34';
$_SESSION['conc_ca']='100';
$_SESSION['conc_mg']='0.8';
$_SESSION['glicose']='1';
}





if (isset($_POST['peso'])){
$_SESSION['ap_peso'] = $_POST['peso'];}

if (isset($_POST['oh'])){
$_SESSION['ap_oh'] = $_POST['oh'];}

if (isset($_POST['vig'])){
$_SESSION['ap_vig'] = $_POST['vig'];}



if (isset($_POST['k'])){
$_SESSION['ap_k'] = $_POST['k'];}
//var_dump($_SESSION['ap_k']);
if (isset($_POST['na'])){
$_SESSION['ap_na'] = $_POST['na'];}

if (isset($_POST['ca'])){
$_SESSION['ap_ca'] = $_POST['ca'];}

if (isset($_POST['mg'])){
$_SESSION['ap_mg'] = $_POST['mg'];}


if (isset($_POST['conc_na'])){
$_SESSION['conc_na'] = $_POST['conc_na'];}

if (isset($_POST['conc_k'])){
$_SESSION['conc_k'] = $_POST['conc_k'];}

if (isset($_POST['conc_ca'])){
$_SESSION['conc_ca'] = $_POST['conc_ca'];}

if (isset($_POST['conc_mg'])){
$_SESSION['conc_mg'] = $_POST['conc_mg'];}

if (isset($_POST['glicose'])){
$_SESSION['glicose'] = $_POST['glicose'];}






$na = (floatval($_SESSION['ap_peso']) * floatval($_SESSION['ap_na']))/floatval($_SESSION['conc_na']);
$k = (floatval($_SESSION['ap_peso']) * floatval($_SESSION['ap_k']))/floatval($_SESSION['conc_k']);
$ca = (floatval($_SESSION['ap_peso']) * floatval($_SESSION['ap_ca']))/floatval($_SESSION['conc_ca']);
$mg = (floatval($_SESSION['ap_peso']) * floatval($_SESSION['ap_mg']))/floatval($_SESSION['conc_mg']);


$gg = floatval($_SESSION['ap_peso']) * floatval($_SESSION['ap_vig']) * 1.44;
$voltt = floatval($_SESSION['ap_peso']) * floatval($_SESSION['ap_oh']);
$vr=$voltt-($na+$k+$ca+$mg);

if ($_SESSION['glicose']=='1'){
$sg50=($gg - ($vr*0.05))/0.45;
}
if ($_SESSION['glicose']=='2'){
$sg50=($gg - ($vr*0.05))/0.2;
}


$sg5=$vr-$sg50;

$volttt = $na+$k+$ca+$mg+$sg5+$sg50;
$bic = $volttt/24;

if ($volttt>0){
$conc=($gg/$volttt)*100;}


?>
<!DOCTYPE html><html lang="pt-br"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Aporte Nutricional</title><?php include "favicon.php"; ?>
<script src='js/moment.min.js'></script>	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src='js/jQuery-Mask-Plugin/dist/jquery.mask.min.js'></script> 
<style>
/* Remove the navbar's default margin-bottom and rounded borders */ 
.navbar {
margin-bottom: 0;
border-radius: 0;
}
body {
background-color: #f8fafb;
}
.table2{
font-family:Calibri;	
width:100%;
}
</style>

<script>
$('.peso').mask('##.000', {reverse: true});
$('.oh').mask('##0.0', {reverse: true});
$('.vig').mask('##.0', {reverse: true});
$('.ca').mask('###.0', {reverse: false});
$('.mg').mask('##.0', {reverse: true});
</script>
</head>
<span id="topo"></span>
<body>

<?php include "menu3.php"; ?>

 <div class="jumbotron" style="background-color: transparent;  background: transparent; position:responsive; top:30px" > 
		<div class="container">
			<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
			
			
			<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
   <font size=10>Aporte </font> <span style="vertical-align: text-top;" class="label label-default">Beta</span>
    
    </div>
	
	
	<div class="panel panel-default">



		
<div class="panel-body">

	<form class="form-horizontal Form" action="aporte.php"  method="POST" id="form" autocomplete="off">	
		<font style="font-size:12px;">



<STRONG>Peso (kg)</STRONG> 
<input type="number" class="form-control"  step="00.001" required   name="peso" id="peso" value="<?php  echo $_SESSION['ap_peso']; ?>">	 
<STRONG>Taxa hídrica (ml/kg/dia)</STRONG> 
<input type="number" class="form-control"  step="000.01" required   name="oh" id="oh" value="<?php  echo $_SESSION['ap_oh']; ?>">	
<STRONG>VIG (mg/kg/min)</STRONG> 
<input type="number" class="form-control"  step="000.01" required   name="vig" id="vig" value="<?php  echo $_SESSION['ap_vig']; ?>">	
<STRONG>Sódio (mEq/kg/dia)</STRONG> 
<input type="number" class="form-control"  step="000.01"  required  size="100" name="na" id="na" value="<?php  echo $_SESSION['ap_na']; ?>">	
<STRONG>Potássio (mEq/kg/dia)</STRONG> 
<input type="number" class="form-control"   step="000.01" required  size="100" name="k" id="k" value="<?php  echo $_SESSION['ap_k']; ?>">	
<STRONG>Cálcio (mg/kg/dia)</STRONG> 
<input type="number" class="form-control"  step="000.01" required   size="100" name="ca" id="ca" value="<?php  echo $_SESSION['ap_ca']; ?>">	
<STRONG>Magnésio (mEq/kg/dia)</STRONG> 
<input type="number" class="form-control"  step="000.01" required   size="100" name="mg" id="mg" value="<?php  echo $_SESSION['ap_mg']; ?>">	
<BR>
<STRONG>Apresentação dos Eletrólitos</STRONG>
<BR>
<select name="conc_na" class="form-control" onchange="this.form.submit()">
 <option value="1.7" <?php if ($_SESSION['conc_na']=='1.7'){echo 'selected';}?>>NACL 10% (1,7 MEQ/ML)</option>
 <option value="3.4" <?php if ($_SESSION['conc_na']=='3.4'){echo 'selected';}?>>NACL 20% (3,4 MEQ/ML)</option>
</select>
<br> 

<select name="conc_k" class="form-control" onchange="this.form.submit()">
 <option value="1.34" <?php if ($_SESSION['conc_k']=='1.34'){echo 'selected';}?>>KCL 10% (1,34 MEQ/ML)</option>
  <option value="2" <?php if ($_SESSION['conc_k']=='2'){echo 'selected';}?>>KCL 15% (2 MEQ/ML)</option>
 <option value="2.5" <?php if ($_SESSION['conc_k']=='2.5'){echo 'selected';}?>>KCL 19,1% (2,5 MEQ/ML)</option>
</select>
<br>

<select name="conc_ca" class="form-control">
 <option value="100" <?php if ($_SESSION['conc_ca']=='100'){echo 'selected';}?>>GLUCA 10% (100 MG/ML)</option>
</select>
<br>

<select name="conc_mg" class="form-control">
 <option value="0.8" <?php if ($_SESSION['conc_mg']=='0.8'){echo 'selected';}?>>SMG 10% (0,8 MEQ/ML)</option>
 <option value="1" <?php if ($_SESSION['conc_mg']=='1'){echo 'selected';}?>>SMG 12,5% (1 MEQ/ML)</option>
 <option value="2" <?php if ($_SESSION['conc_mg']=='2'){echo 'selected';}?>>SMG 25% (2 MEQ/ML)</option>
 <option value="4" <?php if ($_SESSION['conc_mg']=='4'){echo 'selected';}?>>SMG 50% (4 MEQ/ML)</option>
</select>
<br>

<STRONG>Glicose</STRONG>
<BR>
<select name="glicose" class="form-control">
 <option value="1" <?php if ($_SESSION['glicose']=='1'){echo 'selected';}?>>SG 5% + GH 50%</option>
 <option value="2" <?php if ($_SESSION['glicose']=='2'){echo 'selected';}?>>SG 5% + GH 25%</option>
</select>



</div>
	<div class="panel-footer" >
		<div class="row">

	<div class="col-md-12" align=right> 
		<button type="SUBMIT"   class="btn btn-default">Calcular</button>
 		</div>	
		</div>
		</div>
	</div>	
</form>
	

		


   
<?php 
if (!empty($_SESSION['ap_peso'])){
	echo'
	<div class="panel panel-default">
<div class="panel-body">
	

<table class="table table-condensed">
      <thead>
        <tr>
          <th><h4>Glicose</h4></th>
          <th></th>
       </tr>
      </thead>
      <tbody>
 <tr><td>'; if ($_SESSION['glicose']=='1'){echo 'GH50%';} if ($_SESSION['glicose']=='2'){echo 'GH25%';} echo '</td><td>'.number_format($sg50, 1, '.', '').' ML</td></tr>
 <tr><td>SG5%:</td><td>'.number_format($sg5, 1, '.', '').' ML</td></tr>
 </tbody>
</table> 
<table class="table table-condensed">
      <thead>
        <tr>
          <th><h4>Eletrólitos</h4></th>
          <th></th>
       </tr>
      </thead>
      <tbody>';
	  if($_SESSION['ap_na']!='0'){
	  echo '<tr><td>NACL '; 
	  if($_SESSION['conc_na']=='1.7'){echo'10%: ';} 
	  if($_SESSION['conc_na']=='3.4'){echo'20%: ';} 
	  
	  echo'</td><td>'.number_format($na, 1, '.', '').' ML</td></tr>';}
  if($_SESSION['ap_k']!='0'){
	  echo '<tr><td>KCL '; 
	  if($_SESSION['conc_k']=='1.34'){echo'10%: ';} 
	  if($_SESSION['conc_k']=='2'){echo'15%: ';} 
	  if($_SESSION['conc_k']=='2.5'){echo'19,1%: ';} 
	  
	  echo'</td><td>'.number_format($k, 1, '.', '').' ML</td></tr>';}

echo'
  <tr><td>GLUCA 10%:</td><td>'.number_format($ca, 1, '.', '').' ML</td></tr>';
  
    if($_SESSION['ap_mg']!='0'){
	  echo '<tr><td>SMG '; 
	  if($_SESSION['conc_mg']=='0.8'){echo'10%: ';} 
	  if($_SESSION['conc_mg']=='1'){echo'12,5%: ';} 
	  if($_SESSION['conc_mg']=='2'){echo'25%: ';} 
	  if($_SESSION['conc_mg']=='4'){echo'50%: ';} 
	  
	  echo'</td><td>'.number_format($mg, 1, '.', '').' ML</td></tr>';}
	  echo'
 </tbody>
</table> 
<table class="table table-condensed">
      <thead>
        <tr>
          <th><h4>Informações Adicionais</h4></th>
          <th></th>
       </tr>
      </thead>
      <tbody>
 <tr><td>Volune Total:</td><td>'.number_format($volttt, 1, '.', '').' ML</td></tr>
 <tr><td>Correr em BIC:</td><td>'.number_format($bic, 1, '.', '').' ML/H</td></tr>
  <tr><td>Gramas de Glicose:</td><td>'.number_format($gg, 1, '.', '').' Gramas</td></tr>
    <tr><td>Concentração de glicose:</td><td>'.number_format($conc, 1, '.', '').' %</td></tr>
  <tr><td>Volune Eletrólitos:</td><td>'.number_format(($na+$k+$ca+$mg), 1, '.', '').' ML</td></tr>
  <tr><td>Volune Residual:</td><td>'.number_format($vr, 1, '.', '').' ML</td></tr>

 </tbody>
</table> 

</div>


	<div class="panel-footer" >
		<div class="row">

	<div class="col-md-12" align=right> 
	
  <a href="#topo"> <button type="button"  onclick="location.href=\'aporte.php?op=novo\'"  class="btn btn-default" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>
 <a href="#topo"> <button type="button"   class="btn btn-default" ><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></button></a>
		</div>	
		</div>
		</div>
';}

?>







</div>			
</div>
<div class="col-md-4">
</div>
</div>
    </div>
	</div>
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



</body>
<span id="fim"></span>
</html>