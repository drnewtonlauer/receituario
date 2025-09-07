<?php include "config.php"; 




$nome = $_POST['nome'];

$crm = $_POST['crm'];

$esp = $_POST['esp'];

$usu = $_POST['usu'];

$sha = $_POST['sha'];


$result_events ="INSERT INTO usuarios (nome, usuario, senha, crm, especialidade) VALUES ('$nome', '$usu', '$sha', '$crm', '$esp')";
$resultado_events = mysqli_query($conn, $result_events);




header("Location:../cadmd.php"); 
 



?>