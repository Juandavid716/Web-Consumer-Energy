function validar(){
    var nombre, potencia;
    nombre = document.getElementById("nombre").value;
    potencia = document.getElementById("potencia").value;
    if(nombre === "" || potencia === "" ){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(nombre.length>45){
        alert("El nombre es muy largo");
        return false;
    }
    else if(potencia.length>9){
        alert("Mucha potencia");
        return false;
    }
    else if (isNaN(potencia)){
        alert ("La potencia es un valor numerico medido en Watts");
        return false;
    }



}