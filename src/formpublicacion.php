<h3>Añadir/editar datos de publicaciones</h3>
</div>

<div id="centro_content">
	
<div id="containerRegistro">	


	<form action="" method="post" enctype="multipart/form-data">
		<label for="doi">DOI:</label>
		<input class="login" type="text" id="doi" name="doi">


		<label for="titulo">Título del trabajo:</label>
		<input class="login" type="text" id="titulo" name="titulo" >


  <fieldset>
  <legend>Autores:</legend>
<br>
		<label for="autores">Autores miembros:</label>
    	<select name="autores[]" multiple="multiple" class="4colactive">
    		<?php while($row = $res->fetch_assoc()):?>
				<option value="<?php echo($row["email"]);?>"><?php echo($row["nombre"]);?> <?php echo($row["apellidos"]);?> | (<?php echo($row["email"]);?>)</option>
     		<?php endwhile; ?> 	
   		 </select>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="js/multiselect/jquery.multiselect.js"></script>

<script>
$('select[multiple]').multiselect({
    columns: 4,
    placeholder: 'Select options'
});
</script>

<br>

<label for="autoresexternos">Autores externos:</label>
<script src="js/addInput.js" language="Javascript" type="text/javascript"></script>
	<div id="dynamicInput">
<br>
    Nombre Autor 1:<br><input type="text" name="autoresexternos[]">
 </div>
  <input type="button" value="Añadir Autor" onClick="addAutor('dynamicInput');">
 </fieldset>


	

		<br>
		<br>
		<label for="fecha">Fecha de publicación:</label><br><br>
		<input class="login" type="date" id="fecha" name="fecha">
		<br>	
		<br>
				
		<label for="descripro">Resumen del artículo:</label><br><br>
		<textarea class="textinput" id="resumen" name="resumen"></textarea>


  <fieldset>
	<br>
  <legend>Palabras clave:</legend>
				<script src="js/addInput.js" language="Javascript" type="text/javascript"></script>
					<div id="dynamicInput1">
					<br>
    					Keyword 1:<br><input type="text" name="keywords[]">
 					</div>
  				<input type="button" value="Añadir keyword" onClick="addKeyword('dynamicInput1');">
 </fieldset>


<br><br>
		<label for="url">URL:</label>
		<input class="login" type="text" id="url" name="url">
		<br>	
		

		<label for="codpro">Código del proyecto:</label>
		<input class="login" type="text" id="codpro" name="codpro" >


<br>
<fieldset>
<legend>Tipo de publicación:</legend>
<select id="tipopub" name="tipopub">
    <option value="articulo">Articulo</option>
    <option value="libro">Libro</option>
    <option value="capitulo">Capítulo de libro</option>
    <option value="conferencia">Conferencia</option>
</select>

<br>
<div name="formArticulo">
<br>
 <label name="articulo" for="articulo">Nombre de la revista:</label>
		<input class="login" type="text" id="articulonombre" name="articulonombre" >

 <label name="articulo" for="articulo">Volumen:</label>
		<input class="login" type="number" id="articulovolumen" name="articulovolumen" >

 <label name="articulo" for="articulo">Número de páginas:</label>
		<input class="login" type="number" id="articulopaginas" name="articulopaginas" >
</div>



<div name="formLibro" style="display:none">
<br>
 <label name="libro" for="libro">Editorial:</label>
		<input class="login" type="text" id="libroeditorial" name="libroeditorial" >

 <label name="libro" for="libro">Editor:</label>
		<input class="login" type="text" id="libroeditor" name="libroeditor" >

 <label name="libro" for="libro">ISBN:</label>
		<input class="login" type="text" id="libroisbn" name="libroisbn" >
</div>


<div name="formCapitulo" style="display:none">
<br>
 <label name="capitulo" for="capitulo">Titulo del libro:</label>
		<input class="login" type="text" id="capitulotitulolibro" name="capitulotitulolibro" >

 <label name="capitulo" for="capitulo">Editorial:</label>
		<input class="login" type="text" id="capituloeditorial" name="capituloeditorial" >

 <label name="capitulo" for="capitulo">Editor:</label>
		<input class="login" type="text" id="capituloeditor" name="capituloeditor" >

 <label name="capitulo" for="capitulo">ISBN:</label>
		<input class="login" type="text" id="capituloisbn" name="capituloisbn" >

 <label name="capitulo" for="capitulo">Número de páginas:</label>
		<input class="login" type="number" id="capitulopaginas" name="capitulopaginas" >
</div>




<div name="formConferencia" style="display:none">
<br>
 <label name="conferencia" for="conferencia">Nombre de conferencia:</label>
		<input class="login" type="text" id="confnombre" name="confnombre" >

 <label name="conferencia" for="conferencia">Lugar:</label>
		<input class="login" type="text" id="conflugar" name="conflugar" >

 <label name="conferencia" for="conferencia">Reseña de la publicación:</label>
		<textarea class="textinput" id="confresenia" name="confresenia"></textarea>

</div>
</fieldset>


<script>
jQuery(document).ready(function() {
    jQuery("#tipopub").change(function() {
        if (jQuery(this).val() === 'articulo'){	
            jQuery('div[name=formLibro]').hide();   
            jQuery('div[name=formCapitulo]').hide();
            jQuery('div[name=formConferencia]').hide();
            jQuery('div[name=formArticulo]').show();    
        } 
		else if(jQuery(this).val() === 'libro'){
            jQuery('div[name=formArticulo]').hide();
            jQuery('div[name=formCapitulo]').hide();
            jQuery('div[name=formConferencia]').hide();  
            jQuery('div[name=formLibro]').show();       
        }
		else if(jQuery(this).val() === 'capitulo'){
            jQuery('div[name=formLibro]').hide();   
            jQuery('div[name=formArticulo]').hide();
            jQuery('div[name=formConferencia]').hide();
            jQuery('div[name=formCapitulo]').show();      
        }
		else{
            jQuery('div[name=formLibro]').hide();   
            jQuery('div[name=formArticulo]').hide();
            jQuery('div[name=formCapitulo]').hide();
            jQuery('div[name=formConferencia]').show();      
        }
    });
});
</script>
		<div id="lower">
			<input class="login" type="submit" value="Añadir la publicación">
		</div>
	
	</form>
	
	 </div>
	
</div>
