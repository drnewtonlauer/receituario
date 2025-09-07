<?php
  if (!isset($_SESSION)) session_start();
 $_SESSION['UsuarioPapel'] = $_GET['id'];


 header("Location: ../index.php"); 
 
 

  
  ?>