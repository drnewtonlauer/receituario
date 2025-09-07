<?php
  if (!isset($_SESSION)) session_start();
 $_SESSION['IdClinica'] = $_GET['id'];
 $_SESSION['UsuarioClinica'] = $_GET['nome'];


 header("Location: ../index.php"); 
 
 

  
  ?>