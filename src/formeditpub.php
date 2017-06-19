



<div id="centro_content">
	
<div id="containerRegistro">	

<script src="js/addInput.js" language="Javascript" type="text/javascript"></script>
	<form action="" method="post" onsubmit="return validarFormularioPublicacion(this)">
		<label for="doi">DOI:</label>
		<input class="login" type="text" id="doi" name="doi" value="<?php echo($row['doi']);?>" required disabled>
		<div class="errorlabel" id="errordoi"<label for="error"><?php echo("$errordoi");?></label></div><br>


		<label for="titulo">Título del trabajo:</label>
		<input class="login" type="text" id="titulo" name="titulo" value="<?php echo($row['titulo']);?>" required>


  <fieldset>
  <legend>Autores:</legend>
<br>
		<label for="autores">Autores miembros:</label>
	<br><br>
			<?php while($row2 = $res2->fetch_assoc()) : ?>
  <input type="checkbox" name="checkboxlist1[]" value="<?php echo($row2["nombrecompleto"]);?>" checked> <?php echo($row2["nombrecompleto"]);?><br>
			<?php endwhile; ?> 	

			<?php while($row3 = $res3->fetch_assoc()) : ?>
  <input type="checkbox"name="checkboxlist1[]" value="<?php echo($row3["email"]);?>"> <?php echo($row3["email"]);?><br>
			<?php endwhile; ?> 	




<br>

<label for="autoresexternos">Autores externos:</label>
<br><br>
			<?php while($row4 = $res4->fetch_assoc()) : ?>
  <input type="checkbox"name="checkboxlist2[]" value="<?php echo($row4["nombrecompleto"]);?>" checked><?php echo($row4["nombrecompleto"]);?><br>
			<?php endwhile; ?> 	


	<div id="dynamicInput">
<br>
    Nombre Autor 1:<br><input type="text" name="autoresexternos[]">
 </div>
  <input type="button" value="Añadir Autor" onClick="addAutor('dynamicInput');">
 </fieldset>

		<br>
		<br>
		<label for="fecha">Fecha de publicación:</label><br><br>
		<input class="login" type="date" id="fecha" value="<?php echo($row['fecha']);?>" name="fecha" required>
		<br>	
		<br>
				
		<label for="descripro">Resumen del artículo:</label><br><br>
		<textarea class="textinput" id="resumen" name="resumen" required><?php echo($row['resumen']);?></textarea>


  <fieldset>
	<br>
  <legend>Palabras clave:</legend>

			<?php while($row5 = $res5->fetch_assoc()) : ?>
  <input type="checkbox"name="checkboxlist3[]" value="<?php echo($row5["keyword"]);?>" checked><?php echo($row5["keyword"]);?><br>
			<?php endwhile; ?> 	

				<script src="js/addInput.js" language="Javascript" type="text/javascript"></script>
					<div id="dynamicInput1">
					<br>
    					Keyword 1:<br><input type="text" name="keywords[]">
 					</div>
  				<input type="button" value="Añadir keyword" onClick="addKeyword('dynamicInput1');">
 </fieldset>


<br><br>
		<label for="url">URL:</label>
		<input class="login" type="text" id="url" value="<?php echo($row['url']);?>" name="url">
		<div class="errorlabel" id="errorurl"<label for="error"></label></div><br>
		<br>	
		

		<label for="codpro">Proyecto:</label>
		<input class="login" type="text" id="codpro" name="codpro" value="<?php echo($row['codpro']);?>" required disabled>


<br><br>
<fieldset>
<legend>Tipo de publicación:</legend>
<select id="tipopub" name="tipopub" disabled>
    <option value="articulo" <?php if($tipo=="articulo") echo("selected");?>>Articulo</option>
    <option value="libro" <?php if($tipo=="libro") echo("selected");?>>Libro</option>
    <option value="capitulo" <?php if($tipo=="capitulo") echo("selected"); ?>>Capítulo de libro</option>
    <option value="conferencia" <?php if($tipo=="conferencia") echo("selected");?>>Conferencia</option>
</select>

<br>
<div name="formArticulo" <?php if($tipo=="articulo") echo("style='display:block'"); else echo("style='display:none'");?>>
<br>
 <label name="articulo" for="articulo">Nombre de la revista:</label>
		<input class="login" type="text" id="articulonombre" name="articulonombre" value="<?php if($tipo=="articulo") echo($row['nombre']);?>">
		<div class="errorlabel" id="errornombrearticulo"<label for="error"></label></div><br>

 <label name="articulo" for="articulo">Volumen:</label>
		<input class="login" type="number" id="articulovolumen" name="articulovolumen" value="<?php if($tipo=="articulo") echo($row['volumen']);?>">
		<div class="errorlabel" id="errorvolumenarticulo"<label for="error"></label></div><br>

 <label name="articulo" for="articulo">Número de páginas:</label>
		<input class="login" type="number" id="articulopaginas" name="articulopaginas" value="<?php if($tipo=="articulo") echo($row['paginas']);?>">
		<div class="errorlabel" id="errorpaginasarticulo"<label for="error"></label></div><br>
</div>




<div name="formLibro" <?php if($tipo=="libro") echo("style='display:block'"); else echo("style='display:none'");?>>
<br>
 <label name="libro" for="libro">Editorial:</label>
		<input class="login" type="text" id="libroeditorial" name="libroeditorial" value="<?php if($tipo=="libro") echo($row['editorial']);?>">
		<div class="errorlabel" id="errorlibroeditorial"<label for="error"></label></div><br>

 <label name="libro" for="libro">Editor:</label>
		<input class="login" type="text" id="libroeditor" name="libroeditor" value="<?php if($tipo=="libro") echo($row['editor']);?>">
		<div class="errorlabel" id="errorlibroeditor"<label for="error"></label></div><br>

 <label name="libro" for="libro">ISBN:</label>
		<input class="login" type="text" id="libroisbn" name="libroisbn" value="<?php if($tipo=="libro") echo($row['isbn']);?>">
		<div class="errorlabel" id="errorisbn"<label for="error"></label></div><br>


</div>


<div name="formCapitulo"<?php if($tipo=="capitulo") echo("style='display:block'"); else echo("style='display:none'");?>>
<br>
 <label name="capitulo" for="capitulo">Titulo del libro:</label>
		<input class="login" type="text" id="capitulotitulolibro" name="capitulotitulolibro" value="<?php if($tipo=="capitulo") echo($row['titulolibro']);?>">
		<div class="errorlabel" id="errorcaptitulo"<label for="error"></label></div><br>

 <label name="capitulo" for="capitulo">Editorial:</label>
		<input class="login" type="text" id="capituloeditorial" name="capituloeditorial" value="<?php if($tipo=="capitulo") echo($row['editorial']);?>">
		<div class="errorlabel" id="errorcapeditorial"<label for="error"></label></div><br>

 <label name="capitulo" for="capitulo">Editor:</label>
		<input class="login" type="text" id="capituloeditor" name="capituloeditor" value="<?php if($tipo=="capitulo") echo($row['editor']);?>">
		<div class="errorlabel" id="errorcapeditor"<label for="error"></label></div><br>

 <label name="capitulo" for="capitulo">ISBN:</label>
		<input class="login" type="text" id="capituloisbn" name="capituloisbn" value="<?php if($tipo=="capitulo") echo($row['isbn']);?>">
		<div class="errorlabel" id="errorcapisbn"<label for="error"></label></div><br>

 <label name="capitulo" for="capitulo">Número de páginas:</label>
		<input class="login" type="number" id="capitulopaginas" name="capitulopaginas" value="<?php if($tipo=="capitulo") echo($row['paginas']);?>">
		<div class="errorlabel" id="errorcappaginas"<label for="error"></label></div><br>
</div>





<div name="formConferencia" <?php if($tipo=="conferencia") echo("style='display:block'"); else echo("style='display:none'");?>>
<br>
 <label name="conferencia" for="conferencia">Nombre de conferencia:</label>
		<input class="login" type="text" id="confnombre" name="confnombre" value="<?php if($tipo=="conferencia") echo($row['nombre']);?>">
		<div class="errorlabel" id="errconfnombre"<label for="error"></label></div><br>

 <label name="conferencia" for="conferencia">Lugar:</label>
		<input class="login" type="text" id="conflugar" name="conflugar" value="<?php if($tipo=="conferencia") echo($row['lugar']);?>">
		<div class="errorlabel" id="errconglugar"<label for="error"></label></div><br>

 <label name="conferencia" for="conferencia">Reseña de la publicación:</label>
		<textarea class="textinput" id="confresenia" name="confresenia"><?php if($tipo=="conferencia") echo($row['resenia']);?></textarea>
		<div class="errorlabel" id="errconfresenia"<label for="error"></label></div><br>

</div>
</fieldset>


		<div id="lower">
			<input class="login" type="submit" value="Añadir la publicación">
		</div>
	
	</form>
	
	 </div>
	
</div>
