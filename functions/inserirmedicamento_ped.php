<?php include"config.php"; 

if (isset($_POST['id'])){
	$id = $_POST['id'];


$droga['med']=$_POST['med'];
$nome = $_POST['med'];
$droga['via']=$_POST['via'];
$droga['qtd']=$_POST['qtd'];	
$droga['pos']=$_POST['pos'];	
$calc=$_POST['calc'];	
$nome = str_replace(",",".",$nome);

$procurar = array();
$procurar[0] = "/'/";
$procurar[1] = "/\"/";
$substituir = "";
$nome = preg_replace($procurar, $substituir, $nome);
$droga = preg_replace($procurar, $substituir, $droga);
$medicamento = serialize($droga);
$nome = strval($nome);

$result_events ="update medicamento_ped set nome='$nome', medicamento='$medicamento', calc='$calc' where id='$id'";
$resultado_events = mysqli_query($conn, $result_events);

header("Location:../pesquisamedicamento_ped.php?op=atu");  
} else{



$droga['via']=$_POST['via'];

$droga['med']=$_POST['med'];
$nome = $_POST['med'];
$droga['qtd']=$_POST['qtd'];	
$droga['pos']=$_POST['pos'];	
$calc=$_POST['calc'];
$nome = str_replace(",",".",$nome);

$procurar = array();
$procurar[0] = "/'/";
$procurar[1] = "/\"/";
$substituir = "";
$nome = preg_replace($procurar, $substituir, $nome);
$droga = preg_replace($procurar, $substituir, $droga);
$medicamento = serialize($droga);
$nome = strval($nome);



$result_events ="INSERT INTO medicamento_ped (nome, medicamento, calc) VALUES ('$nome', '$medicamento', '$calc')";
$resultado_events = mysqli_query($conn, $result_events);


$id = mysqli_insert_id($conn);

if (isset($_POST['novo'])){
	//novo da pag de cadastro
 header("Location:../pesquisamedicamento_ped.php?op=cad");} else {
	 //novo da pag de receita
header("Location:../receituario_ped.php?id=$id"); }}
 



?>