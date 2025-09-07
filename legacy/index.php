<?php   include"verificalogin.php";
//var_dump($_SESSION['nome_av']);
 include "functions/config.php";
$idmd = $_SESSION['UsuarioID'];
if (empty($_SESSION['nome_av'])) {$_SESSION['nome_av'] = '';}

if (isset ($_GET['op']) and $_GET['op']=="clean"){
	unset($_SESSION['nome_av']);
	$_SESSION['nome_av'] = '';
	 header ('Location: index.php');
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Med Lauer</title><?php include "favicon.php"; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="./css/bootstrap.min.css" rel="stylesheet">

	<script src='js/moment.min.js'></script>
 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="./css/sweetalert2.min.css">
	<link rel="stylesheet" href="./css/sweetalert2.scss">
   <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="./js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="./js/bootstrap-datetimepicker.pt-BR.js" charset="UTF-8"></script>
		<script type="text/javascript" src="functions/funcs.js"></script>
<?php  if (empty($_SESSION['UsuarioClinica'])) {echo'	
<script type="text/javascript">
     $(window).load(function(){
         $(\'#myModal\').modal(\'show\');
      });
</script>';} ?>

<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    body {
      background-color:  #f8fafb

    }


    .modal .modal-dialog { width: 500px; } 
#resultado{
position: absolute;
z-index: 9999; 
}


</style>
 

<body  onLoad="document.Form.nome.focus();">




<?php include "menu.php"; ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron"  style="background-color: transparent;  background: transparent; position:responsive; top:50px;align:center;">        
		<div class="container">
		
			<div class="row">
  <div class="col-md-4">

  

 


  <div class="panel panel-default"  >
  <div class="panel-body" style="padding-top:0px; padding-bottom:8px">
<h1 align="center" style="color:gray;font-size:35px;">

</h1>
<p align="left" style="color:#2980b9;font-size:12px;"> 
 Atendimento</p>
<form class="form-inline Form" onsubmit="return false;" id="Form" name="Form" autocomplete="off">
<div class="form-group">

	<div class="input-group">


    
	<input type="text"  class="form-control" name="nome" size="100" id="busca" placeholder="Nome..." onfocus="this.selectionStart = this.selectionEnd = 500;" 
	onkeyup="insere(this.value)" value="<?php  echo $_SESSION['nome_av']; ?>" style="box-shadow: 0 0 0 0;font-size:11px;">
     
  <span class="input-group-btn">
      <button class="btn btn-default" onclick="location.href='index.php?op=clean'" type="button">X</button>
      </span> 	 

 

 </div>
 </div> 
<br><br>
		
				</form>
<script>

function insere(valor) {
 
// Verificando Browser
if(window.XMLHttpRequest) {
   req = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   req = new ActiveXObject("Microsoft.XMLHTTP");
}
 
// Arquivo PHP juntamente com o valor digitado no campo (método GET)
var url = "_insere.php?valor="+valor;

// Chamada do método open para processar a requisição
req.open("Get", url, true); 


req.send(null);


}

</script>
<div class="list-group">
 
  <a href="receituario.php?op=1"  target=”_blank” class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:11px;">Receituário</a>
  <a href="receituario_ped.php?op=1&peso=10&idade=2"   target=”_blank” class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:11px;">Receituário Pediátrico</a>
   <a href="receituario_ped_ev.php?op=1&peso=10"    target=”_blank” class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:11px;">Drogas Pediátricas Injetáveis</a>
  <a href="solicitacao.php?op=1"   target=”_blank” class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:11px;">Solicitação</a>
  <a href="raiox.php?op=1"   target=”_blank” class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:11px;">Raio-X</a>
  <a href="atestado.php?op=1"  target=”_blank” class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:11px;">Atestados</a>

</div>
			
  </div></div>
 
  <div class="panel panel-default">	
  <div class="panel-body"> 
  <p align="left" style="color:#2980b9;font-size:12px;"> 
 Atestado Médico</p>
<div class="list-group">
  <a href="atestado.php?at1=1&op=1"  class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:11px;">Atestado Padrão</a>
</div>

  </div></div>   

   

<div class="panel panel-default">
<div class="panel-body">
<p align="left" style="color:#2980b9;font-size:12px;"> 
Configurações</p>

<a href="#" data-toggle="modal" data-target="#myModal" style="text-decoration: none;"><font align="left" style="color:#545454;font-size:10px;">Local: 
<?php echo $_SESSION['UsuarioClinica'];?></font></a><br>
<a href="#" data-toggle="modal" data-target="#myModal3" style="text-decoration: none;"><font align="left" style="color:#545454;font-size:10px;">Papel: 
<?php echo $_SESSION['UsuarioPapel'];?></font></a><br>
<a href="#" data-toggle="modal" data-target="#myModal4" style="text-decoration: none;"><font align="left" style="color:#545454;font-size:10px;">Cabeçalho e Rodapé: 
<?php echo $_SESSION['UsuarioCab'];?></font></a><br>
<a href="#" data-toggle="modal" data-target="#myModal7" style="text-decoration: none;"><font align="left" style="color:#545454;font-size:10px;">Mostrar Data: 
<?php echo $_SESSION['UsuarioData'];?></font></a>
</div></div>
</div>

<div class="col-md-4">
<div class="panel panel-default">	
<div class="panel-body" >
<p  style="color:#2980b9;font-size:12px;">
	Receitas Adulto</p>
<div class="list-group">
<?php 
	  $s = "SELECT * from modelo where fav=1 and idmd=$idmd ORDER BY NOME";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){
	$mdroga = unserialize($mod['modelo']);
foreach ($mdroga as $tipo => $array)
{ if ($tipo == 'receita')

echo '<a href="receituario.php?idmod='.$mod['id'].'&op=1" class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">'.$mod['nome'].'</a>';

}	}
 ?>
</div>
 </div></div>




  </div>
   <div class="col-md-4">
 

<div class="panel panel-default">
<div class="panel-body"> 
<p  style="color:#2980b9;font-size:12px;">
	Receitas Pediátricas</p>
<div class="list-group">



<?php $w = "SELECT * from modelo_ped where fav=1 and idmd=$idmd ORDER BY NOME" ;
$resultad_event = mysqli_query($conn, $w);
while($res = mysqli_fetch_array($resultad_event))	{
	$type = unserialize($res['modelo']);
	foreach ($type as $tipo => $array)
{ if ($tipo == 'receita'){
echo '<a href="receituario_ped.php?idmod='.$res['id'].'&op=1&peso=10"  class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">'.$res['nome'].'</a>';
}}}
  
   ?>
</div>
  </div></div>

<div class="panel panel-default">	

  <div class="panel-body" >

  <p  style="color:#2980b9;font-size:12px;">
	Modelo Solicitações</p>

<div class="list-group">

<?php 
	  $s = "SELECT * from modelo where fav=1 and idmd=$idmd ORDER BY NOME";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){
	$mdroga = unserialize($mod['modelo']);
foreach ($mdroga as $tipo => $array)
{ if ($tipo == 'solicitacao')

echo '<a href="solicitacao.php?idmod='.$mod['id'].'&op=1"  class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">'.$mod['nome'].'</a>';

}	}

  
   ?>
</div>

  </div></div>
  
  
</div>  
  
 
			

			
		</div>
		

      </div>





<!-- Modal -->

<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <font style="color:#2980b9;font-size:12px;">Tamanho do Papel</font>
      </div>
      <div class="modal-body">
 				<div class="list-group" style="font-size:12px;">
	<a href="functions/selectpapel.php?id=A4" style="text-decoration:none;"><button type="button" class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">	
 A4</button></a>
 	<a href="functions/selectpapel.php?id=A5" style="text-decoration:none;"><button type="button" class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">	
 A5</button></a>
</div>
      </div>  
    </div>
  </div>
</div>

<!-- Modal -->

<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">       
       <font style="color:#2980b9;font-size:12px;">Cabeçalho e Rodapé</font>
      </div>
      <div class="modal-body">								
						
				<div class="list-group" style="font-size:12px;">
				 	<a href="functions/selectcab.php?id=Sim" style="text-decoration:none;"><button type="button" class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">	
Sim</button></a>
	<a href="functions/selectcab.php?id=Não" style="text-decoration:none;"><button type="button" class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">	
Não</button></a>

</div></div>	

    </div>

  </div>
</div>

<!-- Modal -->

<div id="myModal7" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
       <font style="color:#2980b9;font-size:12px;">Mostrar Data</font>
      </div>
      <div class="modal-body">
     
								
							
				<div class="list-group" style="font-size:12px;">

	<a href="functions/mostrardata.php?id=Sim" style="text-decoration:none;"><button type="button" class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">	
Sim</button></a>
 	<a href="functions/mostrardata.php?id=Não" style="text-decoration:none;"><button type="button" class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">	
Não</button></a>
</div>	
	</div>	
    </div>
  </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
       <font style="color:#2980b9;font-size:12px;">Selecione o Local</font>
      </div>
      <div class="modal-body">
      
								
						
				<div class="list-group" style="font-size:12px;">
						<?php
//var_dump($_SESSION['op']);
$sql = "SELECT * FROM clinicas order by nome";

$result = $conn->query($sql);
		 
 
while ($clinicas = mysqli_fetch_array($result)) {


	echo '
	<a href="functions/selectclinica.php?id='.$clinicas['idclin'].'&nome='.$clinicas['nome'].'" style="text-decoration:none;"><button type="button" class="list-group-item" style="padding-bottom: 6px; padding-top: 6px;font-size:10px;">'.$clinicas['nome'].'	
- <font style="color:#2980b9;">'.$clinicas['endereco'].'</font></button></a>';}

			
?></div>
      </div>
    </div>
  </div>
</div>


</body>


</html>