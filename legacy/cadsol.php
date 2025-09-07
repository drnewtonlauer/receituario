<?php  include"functions/config.php";

if (isset($_GET['id'])){
$id = $_GET['id'];
$r = "SELECT * from solicito where id='$id'";
$r_events = mysqli_query($conn, $r);
$drog = mysqli_fetch_array($r_events) ;	
$droga = $drog['nome'];
	



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
   <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
  </head>

  <body>
<?php include"menu3.php"; ?>
    <div class="jumbotron"   style="background-color: transparent; padding-top:30px;" >
		<div class="container">
			<div class="row">
					<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
				
					<div class="panel-body" style="margin-bottom:0px;padding-bottom:0px;">
						<div class="page-header" style="margin-top:0px; padding-top:0px; padding-bottom:0px;">
						<p style="color:#2980b9;font-size:15px;">
						Solicitação</p>					
						</div>
						
			<div class="col-sm-12">




<form class="form-horizontal Form" action="functions/inserirsolicitacao.php"  id="Form" name="Form" method="POST" autocomplete="off">		
		<?php if (isset($id)) { echo '<input type="hidden"  name="id" value="'.$id.'">';}
		else { echo '<input type="hidden"  name="novo" value="novo">';}?>
				<div class="form-group form-group-sm">
			
					<div class="col-sm-10">					
											
							  <textarea  type="text" class="form-control"  name="sol"  required><?php if (isset($_GET['id']))  {echo $droga;}?></textarea>
						  
					</div>							
	
				</div>
			
					</div></div>
					<div class="panel-footer" style="height:60px;">
					<div class="col-sm-offset-3 col-sm-9" align="right">
						<a href="pesquisasol.php"><button type="button" class="btn btn-default">Voltar</button></a>
						<?php if (isset($id)) { echo '<a href="functions/excluisol.php?id='.$id.'"><button type="button" class="btn btn-default">Excluir</button></a>';}?>
						<button type="submit" class="btn btn-primary">Confirma</button></form>
						
					</div>
				</div>
					
				</div>
					</div>
					
				</div>	
		</div> <!-- /container -->
	</div><!-- /jumbotron -->


</body></html>