<?php
session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = '') {
    echo 'No tienes autorizacion';
    die();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
           <link rel="stylesheet" type="text/css" href="estilos.css"> 
      <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="validarelec.js"> </script>
         <div class="container-fluid slider d-flex justify-content-center item align-items-center">
           <style>
      .slider {
    background: url(images/cascadas.jpg);
    background-size: cover;
    background-position: center;
    height: 700px;
         
    
}
      </style>   
            
          
       <form action="addelec.php" method="post" class="form" onsubmit="return validar();">
<h2 class="a"> Electrodomesticos </h2>
  <div class="contenedor-inputs">
      <label class="mislabels"for="">Electrodomestico: </label>
 
          <input type="text" id="nombre" name="nombre" class="input-100" required>
           <label class="mislabels"for="">Potencia: 
            <label class="peq" for=""> (WATTS)</label>
           </label>
           
          
  <input type="text" id="potencia" name="potencia" class="input-100" required> 
  
      
  

    <input type="submit" value="Añadir" name="submit" class="btn-enviar">
  </div>
</form>   
            
            
            
        </div>
    </head>
    <body>
        
         <div class="container-fluid bg-dark fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light navbar navbar-dark bg-dark navbar container">
  <a class="navbar-brand" href="#">
      <a class="navbar-brand" href="#">
    <img src="images/imagen.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Consumo de energía
  </a>

  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav ml-auto">
       
      <a class="nav-item nav-link" href="admin.php">Volver</a>

<div class="navbar-nav ml-3"> 
       <a href="cerrarsesion.php" class="btn btn-danger"> Cerrar sesión</a>
       </div>
        
    </div>
    
    
  </div>
</nav>
  
  
  
  
  
   </div>
       
   
    </body>
    
</html>