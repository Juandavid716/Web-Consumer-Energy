<?php
session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = '') {
    echo 'No tienes autorizacion';
    die();
}
?>


<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="coments.css">


 <div class="container-fluid slider d-flex justify-content-center item align-items-center">
           <style>
      .slider {
    background: url(images/energia.jpg);
    background-size: cover;
background-position: center;
    height: 750px;
        margin-left: -20px;
          margin-right: -20px;
        
          margin-top: -10px;
    
}
      </style> 
    </div>  
    <body>
        <div class="caja"> 

<div class="colorcoment"> 
<h1> Comentarios</h1>
</div>

<?php

$conexion = mysqli_connect("localhost","root","","db");
if($conexion){
    $consulta = "SELECT id,usuario,fecha,mensaje FROM comentarios  ORDER BY ID DESC";
  $resultado = mysqli_query($conexion,$consulta);
$cont = 0;
while($cont<15) {
    $cont++;
$filas=mysqli_fetch_row($resultado);
    echo "<B> Mensaje </B> #".$filas[0] . "; ";
    echo "<B> Escrito por: </B> #".$filas[1] . "; ";
    echo "<B> Fecha: </B> #".$filas[2] . "; ";
    echo $filas[3];
   echo "<HR>";
    
}
   
}

 mysqli_close($conexion);
?>
      <div class="login-box">  
       <form action="comprobar.php" method="post">
        
         <input type="submit" value="Volver" name="1">
       <input type="submit" value="Cerrar sesión" name="2" >
        
        </form>
            </div>
        </div>
    


        
    </body>

</html>