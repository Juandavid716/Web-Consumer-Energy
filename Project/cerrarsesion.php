<?php
session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = '') {
    echo 'No tienes autorizacion';
    die();
}
session_destroy();
$conexion = mysqli_connect("localhost","root","","db");
    $consulta="SELECT valor FROM costo";
$resultado=mysqli_query($conexion, $consulta);
if($re = mysqli_fetch_array($resultado)){
    mysqli_query($conexion, "DELETE FROM costo");
}
else {
    echo 'los datos no han sido eliminados';
    
}
header('location:index.html');
?>