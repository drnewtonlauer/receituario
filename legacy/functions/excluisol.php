<?php
include"config.php";
$id = $_GET['id']; 


$result_events ="DELETE FROM solicito WHERE id='$id'";

$resultado_events = mysqli_query($conn, $result_events);


			header("Location:../pesquisasol.php?op=exc");  


?>