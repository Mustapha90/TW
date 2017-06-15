var counter = 1;
var limit = 10;
function addInput(divName){
     if (counter == limit)  {
          alert("No se puede añadir más de 10 colaboradores " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Investigador " + (counter + 1) + " <br><input type='text' name='myInputs[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}

