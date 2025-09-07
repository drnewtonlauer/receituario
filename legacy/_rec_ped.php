<?php
session_start();

$calculo = $_GET['valor'];
if (is_numeric($calculo)){
$dose = $_SESSION['peso_av'] * $calculo;

echo 'DAR '.$dose;}
else {echo '';} 
?>