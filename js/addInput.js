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


function validarFechas(fecha1, fecha2) {
	var d1 = new Date(fecha1);
	var d2 = new Date(fecha2);

	if(d2<d1){
		 return false;
	}

	return true;
}

function validarFormBusqueda() {

	var fecha1,fecha2, d1, d2;

    fecha1 = document.getElementById("fecha1").value;
    fecha2 = document.getElementById("fecha2").value;


	var res = validarFechas(fecha1, fecha2);
	
	if(!res){
   		 document.getElementById("errfecha").innerHTML = "Las fechas no son válidas";
		
	}

	return res;
}





function validarUrl(url) {
	var urlregex = /^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/;
    return urlregex.test(url);
}


function validarFormularioProyecto(form) {
	var success=true;
	var fecha1,fecha2, d1, d2;



	if(!validarUrl(form.url.value)){
   		 document.getElementById("errorurl").innerHTML = "No es una URL válida!";
		success=false;
	}

    fecha1 = document.getElementById("fechacomienzo").value;
    fecha2 = document.getElementById("fechafin").value;

	if(!validarFechas(fecha1, fecha2)){
   		document.getElementById("errorfechas").innerHTML = "La fecha de fin no puede ser menor que la fecha de inicio!";
		success=false;
	}

	return success;
}


function validardoi(doi){
	var doiregex='';

    return urlregex.test(doi);
}


function validarisbn(isbn) {
	isbn = isbn.replace(/[^\dX]/gi, '');
    if(isbn.length == 10) {
    	var chars = isbn.split('');
        if(chars[9].toUpperCase() == 'X') {
        	chars[9] = 10;
        }
	var sum = 0;
	for(var i = 0; i < chars.length; i++) {
		    sum += ((10-i) * parseInt(chars[i]));
	}
	return (sum % 11 == 0);
	} else if(isbn.length == 13) {
	var chars = isbn.split('');
	var sum = 0;
	for (var i = 0; i < chars.length; i++) {
			if(i % 2 == 0) {
			        sum += parseInt(chars[i]);
			} else {
			        sum += parseInt(chars[i]) * 3;
			}
	}
	return (sum % 10 == 0);
	} else {
	return false;
	}
}



function validarFormularioPublicacion(form) {
	var success=true;

	if(form.tipopub.value=="libro"){
		if(!validarisbn(form.libroisbn.value)){
   			document.getElementById("errorisbn").innerHTML = "No es un ISBN válido!";
			success=false;
		}
		
		if(form.libroeditorial.value == ""){
   			document.getElementById("errorlibroeditorial").innerHTML = "Este campo es obligatorio!";
		}

		if(form.libroeditor.value == ""){
   			document.getElementById("errorlibroeditor").innerHTML = "Este campo es obligatorio!";
		}
	}
	else if(form.tipopub.value=="capitulo"){
		if(!validarisbn(form.capituloisbn.value)){
   			document.getElementById("errorcapisbn").innerHTML = "No es un ISBN válido!";
			success=false;
		}


		if(form.capitulotitulolibro.value == ""){
   			document.getElementById("errorcaptitulo").innerHTML = "Este campo es obligatorio!";
		}

		if(form.capituloeditorial.value == ""){
   			document.getElementById("errorcapeditorial").innerHTML = "Este campo es obligatorio!";
		}

		if(form.capituloeditor.value == ""){
   			document.getElementById("errorcapeditor").innerHTML = "Este campo es obligatorio!";
		}

		if(form.capitulopaginas.value == ""){
   			document.getElementById("errorcappaginas").innerHTML = "Este campo es obligatorio!";
		}

	}
	else if(form.tipopub.value=="articulo"){
		if(form.articulonombre.value == ""){
   			document.getElementById("errornombrearticulo").innerHTML = "Este campo es obligatorio!";
		}

		if(form.articulovolumen.value == ""){
   			document.getElementById("errorvolumenarticulo").innerHTML = "Este campo es obligatorio!";
		}

		if(form.articulopaginas.value == ""){
   			document.getElementById("errorpaginasarticulo").innerHTML = "Este campo es obligatorio!";
		}
	}
	else{

		if(form.confnombre.value == ""){
   			document.getElementById("errconfnombre").innerHTML = "Este campo es obligatorio!";
		}

		if(form.conflugar.value == ""){
   			document.getElementById("errconglugar").innerHTML = "Este campo es obligatorio!";
		}

		if(form.confresenia.value == ""){
   			document.getElementById("errconfresenia").innerHTML = "Este campo es obligatorio!";
		}
	}



	if(!validarUrl(form.url.value)){
   		document.getElementById("errorurl").innerHTML = "No es una URL válida!";
		success=false;
	}
	
	return success;
}


function validarEmail(email) {
	 var emailregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    return emailregex.test(email);
}




function validarTelefono(telefono) {
	 var telefonoregex = /^[\d]{3}[-]*([\d]{2}[-]*){2}[\d]{2}$/;

    return telefonoregex.test(telefono);
}

function validarFicheroFoto(fichero){
	var extregex = /(\.jpg|\.jpeg|\.bmp|\.gif|\.png)$/i;
	if(!extregex.exec(fichero)){
		return false;
	}
	return true;
}

function validarFormMiembro(form){
	var success=true;

	if(!validarEmail(form.email.value)){
   		document.getElementById("erroremail").innerHTML = "No es un email válido!";
		success=false;
	}
	else{
   		document.getElementById("erroremail").innerHTML = "";
		
	}

	if(!validarUrl(form.url.value)){
   		document.getElementById("errorurl").innerHTML = "No es una URL válida!";
		success=false;
	}
	else{
   		document.getElementById("errorurl").innerHTML = "";
		
	}

	if(!validarTelefono(form.telefono.value)){
   		document.getElementById("errtelefono").innerHTML = "No es un número de telefono válido!";
		success=false;
	}
	else{
   		document.getElementById("errtelefono").innerHTML = "";
		
	}

	if(form.password.value.length<8){
   		document.getElementById("errpassword").innerHTML = "La contraseña debe tener una longitud de al menos 8 caracteres!";
		success=false;
	}
	else{
   		document.getElementById("errpassword").innerHTML = "";	
		if(form.password.value != form.passwordConf.value){
   			document.getElementById("passConfError").innerHTML = "Las contraseñas no coinciden!";
			success=false;			
		}
		else{
   			document.getElementById("passConfError").innerHTML = "";
		}
	}


	if(!validarFicheroFoto(form.fileToUpload.value)){
   		document.getElementById("fileErr").innerHTML = "No es un una imagen!";
		success=false;
	}
	else{
   		document.getElementById("fileErr").innerHTML = "";
		
	}


	return success;
}

