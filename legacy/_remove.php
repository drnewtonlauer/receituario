<?php
include("functions/config.php");
session_start(); 
unset($_SESSION['nome_av']);

header("Location:index.php");

?>