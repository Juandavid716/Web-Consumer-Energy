<?php

if(isset($_POST['submit'])){
    $category = $_POST['horas'];
    echo $category;
}
?>


 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="form">
<h2 class="a"> Electrodomesticos </h2>
  <div class="contenedor-inputs">
      <label class="mislabels"for="">Nombre del electrodomestico:</label>
 
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
           <label class="mislabels"for="">Potencia: 
        
           </label>




          
  <input type="text" name="potencia" class="input-100" required> 
  
      <label class="mislabels"for="">Cantidad 
        
           </label>
    <input type="text" name="cantidad" class="input-100" required> 
 <label class="mislabels"for="">Número de horas 
        
           </label>
           <select class ="h">
               <option > 1 </option>
                <option > 2 </option>
                 <option > 3 </option>
                  <option > 4 </option>
                   <option > 5 </option>
                    <option > 6 </option>
                     <option > 7 </option>
                      <option > 8 </option>
                       <option > 9 </option>
                        <option > 10 </option>
                         <option > 11 </option>
                          <option > 12 </option>
                           <option > 13 </option>
                            <option > 14 </option>
                             <option > 15 </option>
                              <option > 16 </option>
                               <option > 17 </option>
                                <option > 18 </option>
                                 <option > 19 </option>
                                  <option > 20 </option>
                                   <option > 21 </option>
                                    <option > 22 </option>
                                     <option > 23 </option>
                                      <option > 24 </option>
           </select>
    <input type="submit" value="Calcular" name="submit" class="btn-enviar">
         
    
  </div>
</form>   