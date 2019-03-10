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
   
        <link rel="stylesheet" type="text/css" href="style.css">  

  <link rel="stylesheet" href="css/bootstrap.min.css">
        <div class="container-fluid slider d-flex justify-content-center item align-items-center">
           <style>
      .slider {
    background: url(images/image.jpg);
    background-size: cover;
    background-position: center;
    height: 700px;
         
    
}
      </style>   
            <h1> Bienvenido <?php echo $_SESSION['usuario']  ?>
         
        </h1>
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
        <a class="nav-item nav-link " href="form.php">Agregar electrodomestico <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="conadmin.php">Comentarios</a>
     <a class="nav-item nav-link mr-3" href="#">Calculos</a>
<div> 
       <a href="index.html" class="btn btn-danger"> Exit</a>
       </div>
        
    </div>
    
    
  </div>
</nav>
   </div>
        
    </body>
    
</html>