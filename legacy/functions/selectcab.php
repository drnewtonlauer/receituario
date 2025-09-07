<?php
  if (!isset($_SESSION)) session_start();
 $_SESSION['UsuarioCab'] = $_GET['id'];


 header("Location: ../index.php"); 
 
 

  
  ?>