<?php include"config.php"; 



$droga['med']=$_POST['med'];
$nome = $_POST['med'];

	
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





$result_events ="INSERT INTO medicamento_ped_ev (nome, medicamento, calc) VALUES ('$nome', '$medicamento', '$calc')";
$resultado_events = mysqli_query($conn, $result_events);



	
header("Location:../receituario_ped_ev.php"); 
 



?>