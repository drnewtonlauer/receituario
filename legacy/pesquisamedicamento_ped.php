<?php
include"verificalogin.php";
include"functions/config.php";

$sql = "SELECT * FROM medicamento_ped order by nome";
$result = $conn->query($sql);




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

<link href='css/chosen.min.css' rel='stylesheet' type='text/css'>
<script src='js/chosen.jquery.min.js' type='text/javascript'></script>

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
							<p style="color:#2980b9;font-size:15px;">Drogas Pediátricas</p>					
						</div>
						 <div class="panel-body" style="font-size:12px;  padding-bottom: 0px; padding-top: 0px; padding-left: 0px; padding-right: 0px;">



<select multiple class="form-control" data-placeholder="Medicamento" id="select2" onchange="window.location.href=this.value;">
<option></option>
<?php
$sql = "SELECT * FROM medicamento_ped order by nome";
$result = $conn->query($sql);
while ($rdroga = mysqli_fetch_array($result)) {
echo '<option value="cadmedicamento_ped.php?id='.$rdroga['id'].'">'.$rdroga['nome'].'</option>';
}
?>


</select>
									 </div></div>
							<div class="panel-footer" style="height:60px;">
					<div class="col-sm-12" align="right">
						<a href="cadmedicamento_ped.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Novo</button></a>
					
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
	text: "Medicamento Cadastrado!",	
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
	text: "Medicamento Excluído!",	
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
	text: "Medicamento Atualizado!",	
	timer: 2000,
    showConfirmButton: false,
	reverseButtons: true
  });
}
</script>
<script type="text/javascript">
$(document).ready(function(){
 $('select').chosen({ width:'100%', no_results_text: "Não encontrado" });
});
</script>
</body></html>