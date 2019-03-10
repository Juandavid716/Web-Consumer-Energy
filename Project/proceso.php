<?php

session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = '') {
    echo 'No tienes autorizacion';
    die();
}


$conexion = mysqli_connect("localhost","root","","db");
if($conexion){
    $consulta = "INSERT INTO comentarios (usuario, mensaje) VALUES ('".$_SESSION['usuario']."','".$_POST["mensaje"]."')";
  mysqli_query($conexion,$consulta);
    header("location:comunicacion.php");
    mysqli_close($conexion);
}

?>