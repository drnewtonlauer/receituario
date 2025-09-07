<?php include "config.php"; 



$nome= $_POST['nome'];
$be= $_POST['be'];
$diagnostico= $_POST['diagnostico'];
$cid= $_POST['cid'];

	


$result_events ="INSERT INTO sus (nome, be, diagnostico, cid) VALUES ('$nome', '$be', '$diagnostico', '$cid')";
$resultado_events = mysqli_query($conn, $result_events);
$id = mysqli_insert_id($conn);


header("Location:../gerenciador.php"); 

?>