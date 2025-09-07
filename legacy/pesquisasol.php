<?php include"functions/config.php";



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
<?php include"menu3.php"; ?>
<div class="jumbotron"  style="background-color: transparent;  background: transparent; position:responsive; top:50px">
	<div class="container">

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
	
  
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="page-header" style="margin-top:0px; padding-top:0px; padding-bottom:0px;">
							<p style="color:#2980b9;font-size:15px;">Solicitações Cadastradas</p>					
						</div>
						 <div class="panel-body" style="font-size:12px;  padding-bottom: 0px; padding-top: 0px; padding-left: 0px; padding-right: 0px;">
				<div class="input-group">
				  <span class="input-group-btn">
					<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				  </span>
				  <input  type="text" class="form-control" placeholder="Solicito..." id="busca" onkeyup="buscaSolCad(this.value)"  name="sol"  autocomplete="off" >
				
				</div>	
				<div style="overflow:auto;">
				
						<div id="resultado"></div>
				
</div>

									 </div></div>
							<div class="panel-footer" style="height:60px;">
					<div class="col-sm-12" align="right">
						<a href="cadsol.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Novo</button></a>
					
					</div>
				</div>

					
											
					
											
				
									 
					
										 </div>
		
 <?php
$sql = "SELECT * FROM solicito order by nome";
$result = $conn->query($sql);
while ($rdroga = mysqli_fetch_array($result)) {
echo $rdroga['nome'].'
<a href="cadsol.php?id='.$rdroga['id'].'"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
&nbsp
<a href="functions/excluisol.php?id='.$rdroga['id'].'"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> </a>
<br><br>';
}
?> 
  
</div> 
</div>
</div>
<script>

function cad() {
  swal({	  
    title: '',
	text: "Solicitação Cadastrada!",	
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
	text: "Solicitação Excluída!",	
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
	text: "Solicitação Atualizada!",	
	timer: 2000,
    showConfirmButton: false,
	reverseButtons: true
  });
}
</script>
</body></html>