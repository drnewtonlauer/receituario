<?php 
include"config.php"; 

if (isset($_POST['id'])){
	$id = $_POST['id'];
	

$nome = $_POST['sol'];
	

$nome = str_replace(",",".",$nome);

$procurar = array();
$procurar[0] = "/'/";
$procurar[1] = "/\"/";
$substituir = "";
$nome = preg_replace($procurar, $substituir, $nome);

$nome = strval($nome);

$result_events ="update solicito set nome='$nome' where id='$id'";
$resultado_events = mysqli_query($conn, $result_events);

header("Location:../pesquisasol.php?op=atu");  
} else{




$nome=$_POST['sol'];

$nome = str_replace(",",".",$nome);

$procurar = array();
$procurar[0] = "/'/";
$procurar[1] = "/\"/";
$substituir = "";
$nome = preg_replace($procurar, $substituir, $nome);

$nome = strval($nome);



$result_events ="INSERT INTO solicito (nome) VALUES ('$nome')";
$resultado_events = mysqli_query($conn, $result_events);


$id = mysqli_insert_id($conn);

if (isset($_POST['novo'])){
	//novo da pag de cadastro
 header("Location:../pesquisasol.php?op=cad");} else {
	 //novo da pag de receita
header("Location:../solicitacao.php?idsol=$id"); }}
 



?>