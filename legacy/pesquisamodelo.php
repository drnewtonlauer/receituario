<?php
include"verificalogin.php";
include"functions/config.php";



?>
<!DOCTYPE html><html lang="pt-br"><head>
<head>
    <title>Med Lauer</title><?php include "favicon.php"; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
	<script src='js/jquery.min.js'></script>
	<script src='js/bootstrap.min.js'></script>
	<script src='js/moment.min.js'></script>

	<script type="text/javascript" src="functions/funcs.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="./css/sweetalert2.min.css">
	<link rel="stylesheet" href="./css/sweetalert2.scss">



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

   <body <?php
if (isset ($_GET['op'])) {
	$op = $_GET['op'];
echo'onload="'.$op.'()"';
}
?> >
<?php include"menu.php"; ?>
<div class="jumbotron"  style="background-color: transparent;  background: transparent; position:responsive; top:50px">
	<div class="container">

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
	
  
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="page-header" style="margin-top:0px; padding-top:0px; padding-bottom:0px;">
							<p style="color:#2980b9;font-size:15px;">Modelos Cadastrados</p>					
						</div>
						 <div class="panel-body" style="font-size:12px;  padding-bottom: 0px; padding-top: 0px; padding-left: 0px; padding-right: 0px;">
					
<div style="overflow:auto;height:300px">
			<ul class="list-group">
						<?php
//var_dump($_SESSION['op']);
$sql = "SELECT * FROM modelo";

$result = $conn->query($sql);
			 
 
while ($modelo = mysqli_fetch_array($result)) {

	echo '
	<li class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;">'.$modelo['nome'].'
<span class="badge" style="background-color:#9d9d9d;"><a href="modeloreceita.php?id='.$modelo['id'].'"><span class="glyphicon glyphicon-pencil" style="color:white;" aria-hidden="true"></span></a></span>	</li>';}


				
?></ul></div>

									 </div></div>
							<div class="panel-footer" style="height:60px;">
					<div class="col-sm-12" align="right">
						<a href="modeloreceita.php?op=novo"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Novo</button></a>
					
					</div>
				</div>

					
											
					
											
				
									 
					
										 </div>
		

  
</div> 
</div>
</div>
<script>

function cad() {
  swal({	  
    title: '',
	text: "Modelo Cadastrado!",	
	timer: 2000,
    showConfirmButton: false,
	reverseButtons: true
  });
}
</script>
<script>

function exc() {
  swal({	  
    title: '',
	text: "Modelo Excluído!",	
	timer: 2000,
    showConfirmButton: false,
	reverseButtons: true
  });
}
</script>
<script>

function atu() {
  swal({	  
    title: '',
	text: "Modelo Atualizado!",	
	timer: 2000,
    showConfirmButton: false,
	reverseButtons: true
  });
}
</script>
</body></html>