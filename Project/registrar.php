<?php
include 'cn.php';
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];
//consullta para insertar
$insertar = "INSERT INTO usuario (nombre, apellidos, correo, usuario, clave, telefono) VALUES ('$nombre', '$apellidos', '$correo', '$usuario', '$clave', '$telefono') ";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario ='$usuario'");
if(mysqli_num_rows($verificar_usuario)>0){
    echo '<script> alert ("El usuario ya esta registrado"); window.history.go(-1); </script>';
    exit;
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo ='$correo'");
if(mysqli_num_rows($verificar_correo)>0){
    echo '<script> alert ("El correo ya esta registrado"); window.history.go(-1); </script>';
    exit;
}


// Ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
    echo '<script> alert ("Error al registrarse") window.history.go(-1) </script>';
}else{
    echo '<script> alert ("Usuario registrado exitosamente"); window.history.go(-1); </script>';
    header("location:index.html");
}
//Cerrar conexion
mysqli_close($conexion);
