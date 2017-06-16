<h3>Añadir/editar datos de proyectos</h3>
</div>


<div id="centro_content">
	
<div id="containerRegistro">	

	<form action="" method="post" enctype="multipart/form-data">
		<label for="codpro">Código del proyecto:</label>
		<input class="login" type="text" id="codpro" name="codpro" >


		<label for="titulopro">Título:</label>
		<input class="login" type="text" id="titulo" name="titulo" >


		<label for="descripro">Descripción:</label><br><br>
		<textarea class="textinput" id="descripcion" name="descripcion"></textarea>

		Fecha de comienzo:<br><br>
		<input type="date" id="fechacomienzo" name="fechacomienzo" max="2017-06-15"><br><br>

		
		Fecha de fin:<br><br>
		<input type="date" id="fechafin" name="fechafin" min="2030-06-15"><br><br>	

	 <label for="entidades">Entidades colaboradoras:</label>
<script src="js/addEntidad.js" language="Javascript" type="text/javascript"></script>
     <div id="dynamicInput1">
	<br>
          Nombre entidad 1:<br><input type="text" name="entidades[]">
     </div>
     <input type="button" value="Añadir entidad" onClick="addEntidad('dynamicInput1');">

		<br><br>
		
		<label for="cuantipro">Cuantía concedida:</label><br><br>		
		<input type="number" id="cuantia" name="cuantia" min="1" max="20000">
		<br><br>

		<label for="titulopro">Investigador principal:</label>
		<input class="login" type="text" id="investigador" name="investigador">


		<label for="titulopro">Investigadores colaboradores:</label><br><br>


    <select name="multicheckbox[]" multiple="multiple" class="4colactive">
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

	 <label for="nomiembros">Investigadores externos:</label>
<script src="js/addInput.js" language="Javascript" type="text/javascript"></script>
     <div id="dynamicInput">
	<br>
          Nombre Investigador 1:<br><input type="text" name="myInputs[]">
     </div>
     <input type="button" value="Añadir investigador" onClick="addInput('dynamicInput');">


<br><br>
		
		<label for="url">URL:</label>
		<input class="login" type="text" id="url" name="url" >
		<br>




		<div id="lower">
			<input class="login" type="submit" value="Añadir el proyecto">
		</div>
	
	
	</form>
	
	 </div>
	
</div>
