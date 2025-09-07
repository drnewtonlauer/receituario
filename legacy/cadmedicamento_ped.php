<?php   include"verificalogin.php";
include"functions/config.php";

if (isset($_GET['id'])){
$id = $_GET['id'];
$r = "SELECT * from medicamento_ped where id='$id'";
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


?>
<!DOCTYPE html><html lang="pt-br"><head>
<head>
    <title>Med Lauer</title><?php include "favicon.php"; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
	<script src='js/jquery.min.js'></script>
	<script src='js/bootstrap.min.js'></script>
	<script src='js/moment.min.js'></script>

<script src="js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="./css/sweetalert2.min.css">
<link rel="stylesheet" href="./css/sweetalert2.scss">
	<script src='js/jQuery-Mask-Plugin/dist/jquery.mask.min.js'></script>
</head>
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

  </style>
	<script>
		
</script>
<script>
$('.num').mask('0.00');
</script>
  </head>

  <body>
<?php include"menu.php"; ?>
    <div class="jumbotron"   style="background-color: transparent; padding-top:30px;" >
		<div class="container">
			<div class="row">
					<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
				
					<div class="panel-body" style="margin-bottom:0px;padding-bottom:0px;">
						<div class="page-header" style="margin-top:0px; padding-top:0px; padding-bottom:0px;">
						<p style="color:#2980b9;font-size:15px;">
						Medicamento</p>					
						</div>
						
			<div class="col-sm-12">




<form class="form-horizontal Form" action="functions/inserirmedicamento_ped.php"  id="Form" name="Form" method="POST" autocomplete="off">		
		<?php if (isset($id)) { echo '<input type="hidden"  name="id" value="'.$id.'">';}
		else { echo '<input type="hidden"  name="novo" value="novo">';}?>
					
				<div class="form-group form-group-sm">
			
					<div class="col-sm-6">					
						Medicamento						
							  <input  type="text" class="form-control"   name="med" <?php if (isset($_GET['id']))  {echo 'value="'.$droga['med'].'"';}?> >
						  
					</div>	
<div class="col-sm-6">					
					Qtd
										
					<input   type="text" class="form-control" name="qtd" <?php if (isset($_GET['id']))  {echo 'value="'.$droga['qtd'].'"';}?> >					
					</div>					
				</div>
				<div class="form-group form-group-sm">
					
					<div class="col-sm-12">					
					Posologia
						<textarea class="form-control" rows="3" name="pos"  required><?php if (isset($_GET['id']))  {echo $droga['pos'];}?></textarea>			
					</div>					
					
				</div>						
	


      		<div class="form-group form-group-sm">
			
									
					<div class="col-sm-4">					
					<font style="color:black;font-size:12px;">Cálulo</FONT>
 <div class="input-group">
 <span class="input-group-addon" id="sizing-addon1" style="border:1 none;box-shadow: 0 0 0 0;background-color:white;"><font style="color:gray;">Peso X</font></span>
						 <input  type="text" class="form-control num"   required style="border:1 none;box-shadow: 0 0 0 0;" name="calc" <?php if (isset($_GET['id']))  {echo 'value="'.$drog['calc'].'"';}?> required >
				
				</div>
				</div>		
				</div>
	   




				</div>
			
					</div>
					<div class="panel-footer" style="height:60px;">
					<div class="col-sm-offset-3 col-sm-9" align="right">
						<a href="pesquisamedicamento_ped.php"><button type="button" class="btn btn-default">Voltar</button></a>
						<?php if (isset($id)) { echo '<a href="functions/excluimedicamento_ped.php?id='.$id.'"><button type="button" class="btn btn-default">Excluir</button></a>';}?>
						<button type="submit" class="btn btn-primary">Confirma</button></form>
						
					</div>
				</div>
					
				</div>
			</div>			
		</div> <!-- /container -->
	</div><!-- /jumbotron -->


</body></html>