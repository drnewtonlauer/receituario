<?php 
include"config.php"; 
session_start();



$nome = $_POST['nome'];
$nome = str_replace(",",".",$nome);

if (!empty($_SESSION['modreceita'])) {
$droga['receita'] = $_SESSION['modreceita'];}

if (!empty($_SESSION['modsolicitacao'])){
$droga['solicitacao'] = $_SESSION['modsolicitacao'];}

if (!empty($_SESSION['modtxt'])){
$droga['txt'] = $_SESSION['modtxt'];}

$procurar = array();
$procurar[0] = "/'/";
$procurar[1] = "/\"/";
$substituir = "";
$nome = preg_replace($procurar, $substituir, $nome);

$modelo = serialize($droga);
$nome = strval($nome);


$result_events ="INSERT INTO modelo (nome, modelo) VALUES ('$nome', '$modelo')";
$resultado_events = mysqli_query($conn, $result_events);
unset($_SESSION['modreceita']);
header("Location:../pesquisamodelo.php?op=cad"); 
 



?>