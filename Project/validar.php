<?php
session_start();

$usuario=$_POST['usuario'];


$clave=$_POST['clave'];


//conectar a la base de datos : servidor, usuario, clave, base de datos
$conexion=mysqli_connect("localhost", "root", "", "db");
$consulta="SELECT * FROM usuario WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado); //si coincide se da el resultado y se almacena en la variable filas

if ($filas>0) {  
$_SESSION['usuario'] = $usuario;
    if($usuario=='Juan'){
        header("location:admin.php");
        
    } else {
        
      header("location:panel.php");  
    }

}
else {
 echo "Error";
}

mysqli_free_result($resultado); 
mysqli_close($conexion); 


?>