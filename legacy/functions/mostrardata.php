<?php
  if (!isset($_SESSION)) session_start();
 $_SESSION['UsuarioData'] = $_GET['id'];


 header("Location: ../index.php"); 
 
 

  
  ?>