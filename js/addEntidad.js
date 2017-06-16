var counter = 1;
var limit = 10;
function addEntidad(divName){
     if (counter == limit)  {
          alert("No se puede añadir más de 10 entidades " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Nombre entidad " + (counter + 1) + ":" +" <br><input type='text' name='entidades[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}

