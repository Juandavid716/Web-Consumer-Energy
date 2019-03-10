<?php
session_start();
$varsesion = $_SESSION['usuario'];
$res = 0;
if($varsesion == null || $varsesion = '') {
    echo 'No tienes autorizacion';
    die();
}


  if($varsesion=='Juan'){
        header("location:admin.php");
        
    } else {
        
      header("location:panel.php");  
    }
?>
  
  
