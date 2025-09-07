<?php
include"config.php";
session_start();
$id = $_GET['idmod'];
$return = $_GET['return'];
$result_events ="UPDATE modelo SET fav=1 WHERE id='$id'";

$resultado_events = mysqli_query($conn, $result_events);
//break;

header("Location:../$return.php?fav=1");  


?>