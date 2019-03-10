<?php
session_start();
$varsesion = $_SESSION['usuario'];
$res = 0;
if($varsesion == null || $varsesion = '') {
    echo 'No tienes autorizacion';
    die();
}
if(isset($_POST['submit'])){
    $category = $_POST['category'];
    echo $category;
}
?>


<!DOCTYPE html>
<html>
    <head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
        <link rel="stylesheet" type="text/css" href="estilos.css"> 
         <link rel="stylesheet" type="text/css" href="calculo.css"> 

  <link rel="stylesheet" href="css/bootstrap.min.css">
        <div class="container-fluid slider d-flex justify-content-center item align-items-center">
           <style>
      .slider {
    background: url(images/beach_fun-wide.jpg);
    background-size: cover;
    background-position: center;
    height: 700px;
         
    
}
      </style>   
        
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
         
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="form">
<h2 class="a"> Electrodomesticos </h2>
  <div class="contenedor-inputs">
      <label class="mislabels"for="">Nombre del electrodomestico:</label>
 
         <td>
           <select name="category" id="category" class ="h" >
     

<?php 
$conexion=mysql_connect("localhost","root","") or
die("Problemas en la conexion");
mysql_select_db("db",$conexion) or
die("Problemas en la selección de la base de datos");  
mysqli_query ("SET NAMES 'utf8'");
$clavebuscadah=mysql_query("select id,nombre from electrodomesticos",$conexion) or
die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($clavebuscadah))

{
echo'<OPTION VALUE="'.$row['id'].'">'.$row['nombre'].'</OPTION>';
}
          ?>
                	<option value="350">Nevera</option>
                	<option value="200">Congelador 200 litros (Bajo Consumo)</option>
                	<option value="4500">Cocina Eléctrica (4 quemadores)</option>
                	<option value="1200">Horno Eléctrico</option>
                	<option value="1200">Horno Microondas</option>
                    <option value="1000">Plancha</option>
                    <option value="300">Licuadora</option>
                    <option value="600">Cafetera Eléctrica</option>
                    <option value="500">Lavadora</option>                    
                    <option value="250">Secadora de ropa</option>                    
             
            
                	<option value="100">Bombillas EXTERIORES</option>
                	<option value="40">Bombillas INTERIORES</option>
                	<option value="25">Bombillas de bajo consumo EXTERIORES</option>
                	<option value="15">Bombillas de bajo consumo INTERIORES</option>
                	<option value="200">Televisor de 20"</option>
                	<option value="820">Televisor de plasma de 42"</option>
                    <option value="1800">Aire acondicionado de 12000 BTU</option>
                    <option value="1500">Calentador de agua</option>
                    <option value="1200">Secador de pelo</option>                    
                    <option value="500">Ventilador</option>                    
                
          
                	<option value="30">Teléfono inalámbrico</option>
                	<option value="200">Reproductor de DVDs</option>
                	<option value="350">Ordenador de sobremesa</option>
                	<option value="90">Ordenador portátil</option>
                	<option value="150">Impresora</option>
                    <option value="15">Router inalámbrico</option>
                    <option value="350">Máquina de coser</option>                 
               

           </select>  
         </td> 
           <label class="mislabels"for="">Potencia: 
        
           </label>




          
  <input type="text" name="potencia" class="input-100" required> 
  
      <label class="mislabels"for="">Cantidad 
        
           </label>
    <input type="text" name="cantidad" class="input-100" required> 
 <label class="mislabels"for="">Número de horas 
        
           </label>
          
             <td>        	<select name="horas" id="horas"  class="h">
				<option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>  
            </select></td>
          
           
           <div class="alinear"> 
           <label class="h"> Kw/día:

                                 <?php

if(isset($_POST['submit'])  ){
    $category = $_POST['category'];
    $potencia = $_POST['potencia'];
    $horas = $_POST['horas'];
    $cantidad = $_POST['cantidad'];
   
    $resultado =  (($potencia * $horas) / 1000) * $cantidad;
    $total = $resultado * 461.82;
    $res = $resultado * 30;
    echo " $resultado ";
    
    $conexion = mysqli_connect("localhost","root","","db");
if($conexion){
    $consulta = "INSERT INTO costo (valor) VALUES ('$total')";
  mysqli_query($conexion,$consulta);

    mysqli_close($conexion);
}
}
?>           
                          
                   
           
           </label>
       </div>
<div class="h">
        <label class="h">Kw/mes:
           <?php
          echo "$res";
            ?>
            </label> 
</div>
       
      
      
<div>
    <label class="h" > Valor en pesos:
    <?php
            $conexion = mysqli_connect("localhost","root","","db");
    $consulta="SELECT valor FROM costo";
$resultado=mysqli_query($conexion, $consulta);
        $cont = 0;
        while($filas=mysqli_fetch_row($resultado)) {

$cont = $cont + $filas[0]; 

  
   
    
}
        echo "$cont";
 
        ?>
    </label>
</div>

 
    <input type="submit" value="Calcular" name="submit" class="btn-enviar">
         
    
  </div>
</form>   
            
            
        </div>
   
 
    </head>
    <body>
    
        
    </body>
    
</html>