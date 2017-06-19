<?php

$sql = "SELECT * FROM proyectos where codpro='$codpro'";
  
$res = dbConnect($sql);

$row = $res->fetch_assoc();

?>


<div id="centro_content">
	
<div id="containerRegistro">	
<script src="js/addInput.js" language="Javascript" type="text/javascript"></script>
	<form action="" method="post" onsubmit="return validarFormularioProyecto(this)">
		<label for="codpro">Código del proyecto:</label>
		<input class="login" type="text" id="codpro" name="codpro" value="<?php echo($row['codpro']);?>" required disabled>
		<div class="errorlabel" id="errorcodigo"<label for="error"><?php echo($errorcodpro); ?></label></div><br>


		<label for="titulopro">Título:</label>
		<input class="login" type="text" id="titulo" name="titulo" value="<?php echo($row['titulo']);?>" required>


		<label for="descripro">Descripción:</label><br><br>
		<textarea class="textinput" id="descripcion" name="descripcion" required><?php echo($row['descripcion']);?></textarea>

		Fecha de comienzo:<br><br>
		<input type="date" id="fechacomienzo" name="fechacomienzo" value="<?php echo($row['fechacomienzo']);?>" required><br><br>

		
		Fecha de fin:<br><br>
		<input type="date" id="fechafin" name="fechafin" value="<?php echo($row['fechafin']);?>" required><br><br>	
		<div class="errorlabel" id="errorfechas"<label for="error"></label></div><br>

	 <label for="entidades">Entidades colaboradoras:</label>
<br><br>
			<?php while($row4 = $res4->fetch_assoc()) : ?>
  <input type="checkbox" name="entidadesreg[]" value="<?php echo($row4["nombre"]);?>" checked> <?php echo($row4["nombre"]);?><br>
			<?php endwhile; ?> 	
<script src="js/addEntidad.js" language="Javascript" type="text/javascript"></script>
     <div id="dynamicInput1">
	<br>
          Nombre entidad 1:<br><input type="text" name="entidades[]">
     </div>
     <input type="button" value="Añadir entidad" onClick="addEntidad('dynamicInput1');">

		<br><br>
		
		<label for="cuantipro">Cuantía concedida:</label><br><br>		
		<input type="number" id="cuantia" name="cuantia" min="1" value="<?php echo($row['cuantia']);?>" required>
		<br><br>

		<label for="principal">Investigador principal:</label>
		<input class="login" type="text" id="investigador" name="investigador" value="<?php echo($row['investigador']);?>" required>


		<label for="titulopro">Investigadores colaboradores:</label><br><br>


			<?php while($row1 = $res1->fetch_assoc()) : ?>
  <input type="checkbox" name="checkboxlist1[]" value="<?php echo($row1["email"]);?>" checked> <?php echo($row1["email"]);?><br>
			<?php endwhile; ?> 	

			<?php while($row3 = $res3->fetch_assoc()) : ?>
  <input type="checkbox"name="checkboxlist1[]" value="<?php echo($row3["email"]);?>"> <?php echo($row3["email"]);?><br>
			<?php endwhile; ?> 	


<br>

	 <label for="nomiembros">Investigadores externos:</label>
<br><br>
			<?php while($row2 = $res2->fetch_assoc()) : ?>
  <input type="checkbox" name="checkboxlist2[]" value="<?php echo($row2["nombrecompleto"]);?>" checked> <?php echo($row2["nombrecompleto"]);?><br>
			<?php endwhile; ?> 	

<script src="js/addInput.js" language="Javascript" type="text/javascript"></script>
     <div id="dynamicInput">
	<br>
          Nombre Investigador 1:<br><input type="text" name="myInputs[]">
     </div>
     <input type="button" value="Añadir investigador" onClick="addInput('dynamicInput');">


<br><br>
		
		<label for="url">URL:</label>
		<input class="login" type="text" id="url" name="url" value="<?php echo($row['url']);?>">
		<div class="errorlabel" id="errorurl"<label for="error"></label></div><br>
		<br>




		<div id="lower">
			<input class="login" type="submit" value="Añadir el proyecto">
		</div>
	
	
	</form>
	
	 </div>
	
</div>
