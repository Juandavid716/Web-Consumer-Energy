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
<head>
<title> Comentarios</title>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="estilos.css"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid slider d-flex justify-content-center item align-items-center">
           <style>
      .slider {
    background: url(images/paneles.jpg);
    background-size: cover;
background-position: center;
    height: 650px;
       
    
}
      </style> 
        
        <form action="proceso.php" method="post" class="form">
<h2 class="coment"> Comentarios </h2>
  <div class="contenedor-inputs">
      
           <label class="texto"for="">Mensaje
        
           </label>
          
  <textarea rows="10" cols="80" NAME="mensaje"> </textarea>
  
      
  

    <input type="submit" value="Enviar" name="submit" class="btn-enviar">
  </div>
</form>   
      
 
         </div>  
      

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
       
      <a class="nav-item nav-link" href="panel.php">Volver</a>

<div class="navbar-nav ml-3"> 
       <a href="cerrarsesion.php" class="btn btn-danger"> Cerrar sesión</a>
       </div>
        
    </div>
    
    
  </div>
</nav>
    </div>
</body>
</html>