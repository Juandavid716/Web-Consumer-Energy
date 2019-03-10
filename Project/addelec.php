<?php
include 'cn.php';
$nombre = $_POST["nombre"];
$potencia = $_POST["potencia"];
//consullta para insertar
$insertar = "INSERT INTO electrodomesticos (nombre, potencia) VALUES ('$nombre', '$potencia') ";

$verificar_nombre = mysqli_query($conexion, "SELECT * FROM electrodomesticos WHERE nombre ='$nombre'");
if(mysqli_num_rows($verificar_nombre)>0){
    echo '<script> alert ("El producto ya existe"); window.history.go(-1); </script>';
    exit;
}

// Ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
    echo '<script> alert ("Error al agregar producto") window.history.go(-1) </script>';
}else{
    echo '<script> alert ("Producto agregado exitosamente"); window.history.go(-1); </script>';
}
//Cerrar conexion
mysqli_close($conexion);
