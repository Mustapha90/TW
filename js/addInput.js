var counter = 1;
var counter1 = 1;
var limit = 20;


function addInput(divName){
     if (counter == limit)  {
          alert("No se puede añadir más de 20 colaboradores " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Nombre investigador " + (counter + 1) + ":" +" <br><input type='text' name='myInputs[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}


function addAutor(divName){
     if (counter == limit)  {
          alert("No se puede añadir más de 20 autores " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Nombre Autor " + (counter + 1) + ":" +" <br><input type='text' name='autoresexternos[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}



function addKeyword(divName){
     if (counter == limit)  {
          alert("No se puede añadir más de 100 keywords " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Keyword " + (counter1 + 1) + ":" +" <br><input type='text' name='keywords[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
