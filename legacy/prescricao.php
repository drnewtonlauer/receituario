<?php  include "functions/config.php"; 
session_start();
if (isset($_GET['id_sus'])){
$_SESSION['id_sus'] = $_GET['id_sus'];	
}
$id_sus = $_SESSION['id_sus'];



	  $s = "SELECT * from sus WHERE id_sus=$id_sus";
$s_events = mysqli_query($conn, $s);
while ($mod = mysqli_fetch_array($s_events)){
$nome=$mod['nome'];
}	



if (isset($_POST['med'])  ){
 
   header('Location: prescricao.php'); 
 }


if (empty($_SESSION['prescricao'])) {
$_SESSION['prescricao'] = [];
}



if (isset($_GET['op'])){
unset($_SESSION['prescricao']);	

		
}

 
	


//------------------------------------------------------------------------------------
//pega medicamento inserido agora
if (isset($_GET['id'])){
$id = $_GET['id'];
$r = "SELECT * from medicamento where id='$id'";
$r_events = mysqli_query($conn, $r);
$drog = mysqli_fetch_array($r_events) ;	
$droga = unserialize($drog['medicamento']);
	

$_SESSION['receita'][] = $droga;

}


//pega medicamento do modal modificado banco
if (isset($_POST['prescricao'])){

$droga['prescricao']=$_POST['prescricao'];
$_SESSION['prescricao'][] = $droga;
}

//pega medicamento do banco para modal
if (isset($_GET['id2'])){
$id = $_GET['id2'];
$r = "SELECT * from medicamento where id='$id'";
$r_events = mysqli_query($conn, $r);
$drog = mysqli_fetch_array($r_events) ;	
$droga = unserialize($drog['medicamento']);

	
}

//remove medicamento
if (isset($_GET['del'])){
	$del = $_GET['del'];
unset ($_SESSION['prescricao'][$del]);
$_SESSION['prescricao'] = array_values ($_SESSION['prescricao']);
 header ('Location: prescricao.php');
}

//----------------------------------------------------------------------------------------







//-----------------------------------------------------------------------------------------
//pega modelo
if (isset($_GET['idmod'])){
$id = $_GET['idmod'];
$k = "SELECT * from modelo where id='$id'";
$k_events = mysqli_query($conn, $k);
$mdrog = mysqli_fetch_array($k_events) ;	
$mdroga = unserialize($mdrog['modelo']);
foreach ($mdroga as $tipo => $array)
{
foreach ($array as $arr => $array2){
	if (empty($array2['via'])){
	$array2['via']='';	
	}
if (empty($_SESSION[$tipo])) {
$_SESSION[$tipo] = [];
} 
array_push($_SESSION[$tipo], $array2); }}
 header ('Location: prescricao.php');
}


//--------------------------------------------------------------------------------------------



 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Anísio Neto and Newton Lauer">  	
	<meta name="copyright" content="MedLauer">	
	<title>prescrição</title>
<link href="css/paper.css" rel="stylesheet" />
<link href="css/print.css" rel="stylesheet" />
	<script src='js/moment.min.js'></script>	
	

  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>	
 </head>
 
<style>
  @page {
    size: A4 landscape;
  }

	input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
	label {font-size:10px;
		}
 @media print {
               .noprint {
                  visibility: hidden;
               }
		
</style>

<body>
<body class="A4 landscape">
<section class="sheet padding-10mm">

<table>
	<tr style="text-align:center;">
		<td>  <img  src="img/sus.jpeg" width="60%">  
		</td>
		<td> <label style="font-size:18px; font-weight: bold;" for="título"> PRESCRIÇÃO MÉDICA </label>
		</td>
		<td>  <img  src="img/sus.jpeg" width="60%">  
		</td>
	</tr>
</table>

<table align="center" width="100%">	
	<tr> 
		<td> <label style="font-size:12px;" for="campo1"> NOME:</label>  </td>
		<td colspan="3"> <input style="height:10px;" value="<?php echo $nome;    ?>"> </td>
		<td> <label style="font-size:10px;" for="campo1"> PESO:</label>  </td>
		<td colspan="3"> <input style="height:10px;" > </td>
	</tr>
	</tr>
	<tr> 
		<td> <label style="font-size:10px;" for="campo2"> DATA DE NASCIMENTO:</label>  </td>
		<td> <input style="height:10px;" > </td>
		<td> <label style="font-size:10px;" for="campo2"> IDADE:</label>  </td>
		<td> <input style="height:10px;" > </td>
		<td> <label style="font-size:10px;" for="campo3"> DATA DE INTERNAÇÃO</label>  </td>
		<td> <input style="height:10px;" > </td>
	</tr>
	<tr> 
		<td> <label style="font-size:12px;" for="campo4"> DATA DA PRESCRIÇÃO:</label>  </td>
		<td> <input style="height:10px;" > </td>
		<td> <label style="font-size:12px;" for="campo4"> SETOR:</label>  </td>
		<td> <input style="height:10px;" > </td>
		<td> <label style="font-size:12px;" for="campo5"> LEITO:</label>  </td>
		<td> <input style="height:10px;" > </td>
	</tr>
	<tr> 
		<td> <label style="font-size:12px;" for="campo1"> DIAGNÓSTICO</label>  </td>
		<td colspan="3"> <input style="height:10px;" > </td>
		<td> <label style="font-size:10px;" for="campo1"> PRONTUÁRIO: </label>  </td>
		<td colspan="3"> <input style="height:10px;" > </td>
	</tr>
	
</table>	
<br>
<table align="center" style="border: 1px solid black; border-collapse: collapse;" width="80%">	
	<tr style="border: 1px solid black;">
	<td > <label style="font-size:10px;"> Alergias:</label> </td>
	<td> <input style="height:10px;" > </td>
	<td> <label style="font-size:10px;"> Comorbidades:</label> </td>
	<td> <input style="height:10px;" > </td>
	</tr>
</table><br>
<table align="center" style="border: 1px solid black; border-collapse: collapse;" width="100%">	
	<tr>
	<td style="border: 1px solid black;" > &nbsp </td>
	<td width="70%" style="border: 1px solid black;"> <label style="font-size:12px;" for="campo5"> PRESCRIÇÃO:</label> </td>
	<td style="border: 1px solid black;"> <label style="font-size:12px;" for="campo5"> HORÁRIO:</label> </td>
	</tr>
	
	<?php if (!empty($_SESSION['prescricao'])) {
foreach ($_SESSION['prescricao'] as $index=> $med){
$num = $index +1;	
	echo '		
  <tr>
	<td style="border: 1px solid black;"> '.$num.' </td>
	<td style="border: 1px solid black;"> <input style="height:10px;" value="'.$med['prescricao'].'"></td>
	<td style="border: 1px solid black;"><a href="prescricao.php?del='.$index.'" class="noprint" style="text-decoration: none;"><span class="glyphicon glyphicon-trash noprint" aria-hidden="true" style="color: gray;"></span></a></td>
	</tr>';
}	}
if (empty($_SESSION['prescricao']) ) {echo '<tr>
	<td style="border: 1px solid black;">  </td>
	<td style="border: 1px solid black;"> <input style="height:10px;" value="Prescriçao em branco"> </td>
	<td style="border: 1px solid black;"> <input style="height:10px;" > </td>
	</tr>';} 
?>


</table>
<br><br>
<form class="form-horizontal Form" action="prescricao.php" id="Form" name="Form" method="POST" autocomplete="off">		
		


<tr><td ><input  type="text" class="form-control noprint"  style="border:0 none;box-shadow: 0 0 0 0;padding-left:0px;padding-right:0px;" style="font-size:14px; face:Calibri;"    placeholder="Prescriçao" required  name="prescricao" <?php if (isset($_GET['id2']))  {echo 'value="'.$droga['med'].'"';}?>>
</td>

</tr>

<tr><td colspan="3" align=center><button type="submit"  class="btn btn-sm btn-default noprint"  style="font-size:14px;border:none;color:#3d72aa;">+ Adicionar Item</button></td></tr>

	</form>
	<br><br>




</section>
</body>

<body class="A4">
 <section class="sheet padding-10mm">
<table>
	<tr style="text-align:center;">
		<td>  <img  src="img/sus.jpeg" width="60%">  
		</td>
		<td> <label style="font-size:18px; font-weight: bold;" for="título"> EVOLUÇÃO MÉDICA </label>
		</td>
		<td>  <img  src="img/sus.jpeg" width="60%">  
		</td>
	</tr>
</table>

<table align="center" width="100%">	
	<tr> 
		<td> <label style="font-size:12px;" for="campo1"> NOME:</label>  </td>
		<td colspan="3"> <input style="height:10px;" > </td>
		<td> <label style="font-size:10px;" for="campo1"> DATA DA PRESCRIÇÃO:</label>  </td>
		<td colspan="3"> <input style="height:10px;" > </td>
	</tr>
	<tr> 
		<td> <label style="font-size:12px;" for="campo1"> DIAGNÓSTICO</label>  </td>
		<td colspan="3"> <input style="height:10px;" > </td>
		<td> <label style="font-size:10px;" for="campo1"> PRONTUÁRIO: </label>  </td>
		<td colspan="3"> <input style="height:10px;" > </td>
	</tr>
</table>
<br>

<textarea id="caixa-texto" placeholder="Digite aqui" ></textarea>

	
</section>
</body>

</html>