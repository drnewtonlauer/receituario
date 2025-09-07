<?php 
include"config.php"; 
session_start();
$idmd = $_SESSION['UsuarioID'];


$nome = $_POST['nome'];
$nome = str_replace(",",".",$nome);

if (!empty($_SESSION['receita_ped'])) {
$droga['receita'] = $_SESSION['receita_ped'];}



$procurar = array();
$procurar[0] = "/'/";
$procurar[1] = "/\"/";
$substituir = "";
$nome = preg_replace($procurar, $substituir, $nome);

$modelo = serialize($droga);
$nome = strval($nome);


$result_events ="INSERT INTO modelo_ped (nome, modelo, idmd) VALUES ('$nome', '$modelo', '$idmd')";
$resultado_events = mysqli_query($conn, $result_events);

  $last_id = mysqli_insert_id($conn);
header("Location:../receituario_ped.php"); 
 



?>