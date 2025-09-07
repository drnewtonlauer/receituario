<?php
include"config.php";
$id = $_GET['id']; 


$result_events ="DELETE FROM medicamento_ped_ev WHERE id='$id'";

$resultado_events = mysqli_query($conn, $result_events);


			header("Location:../receituario_ped_ev.php");  


?>