<?php  include"functions/config.php";


$r = "SELECT * from usuarios order by usuario";
$r_events = mysqli_query($conn, $r);
$md = mysqli_fetch_array($r_events) ;	
	

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
						Usuário</p>					
						</div>
						
			<div class="col-sm-12">




<form class="form-horizontal Form" action="functions/inserirmedico.php"  id="Form" name="Form" method="POST" autocomplete="off">		
						
				<div class="form-group form-group-sm">
			
					<div class="col-sm-6">					
						Nome						
							  <input  type="text" class="form-control"   name="nome"  >
						  
					</div>	
					<div class="col-sm-6">					
					CRM
										
					<input   type="text" class="form-control" name="crm" >					
					</div>	
					</div>
					<div class="form-group form-group-sm">
<div class="col-sm-6">					
						Especialidade						
							  <input  type="text" class="form-control"   name="esp"  >
						  
					</div>	
<div class="col-sm-6">					
						Usuário						
							  <input  type="text" class="form-control"   name="usu"  >
						  
					</div></div>
<div class="form-group form-group-sm">					
<div class="col-sm-6">					
						Senha						
							  <input  type="text" class="form-control"   name="sha"  >
						  
					</div>	</div>					
				
								
	


      	
	   




				</div>
			
					</div>
					<div class="panel-footer" style="height:60px;">
					<div class="col-sm-offset-3 col-sm-9" align="right">
			
						
						<button type="submit" class="btn btn-primary">Cadastrar</button></form>
						
					</div>
				</div>
					
				</div>
				<?php
				while ($md = mysqli_fetch_array($r_events) ) {
					echo $md['usuario'].'<br> ';
				}
					?>
			</div>			
		</div> <!-- /container -->
	</div><!-- /jumbotron -->


</body></html>