<?php
include"config.php";
$id = $_GET['id']; 


$result_events ="DELETE FROM medicamento WHERE id='$id'";

$resultado_events = mysqli_query($conn, $result_events);


			header("Location:../pesquisamedicamento.php?op=exc");  


?>