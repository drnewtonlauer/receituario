<?php
include"config.php";
session_start();
$id = $_GET['idmod'];

$result_events ="UPDATE modelo_ped SET fav=1 WHERE id='$id'";

$resultado_events = mysqli_query($conn, $result_events);
//break;

header("Location:../receituario_ped.php?fav=1");  


?>