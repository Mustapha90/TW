<?php

require 'dbConnect.php';



$email = $_GET["user"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$categoria=$_POST['categoria'];
	$telefono=$_POST['telefono']; 
	$url=$_POST['url'];
	$departamento=$_POST['departamento']; 
	$centro=$_POST['centromus'];
	$instituto=$_POST['instituto']; 
	$direccion=$_POST['direccion'];


	$sql = "UPDATE usuarios SET nombre='$nombre', 
								apellidos='$apellidos',
								categoria='$categoria',
								telefono='$telefono',
								url='$url',
								departamento='$departamento', 
								centro='$centro',
								instituto='$centro', 
								direccion='$direccion' WHERE email='$email'";

	$res = dbConnect($sql);
}
else{
	$res = dbConnect("SELECT * FROM usuarios WHERE email='$email'");
	$row = $res->fetch_assoc();
}
?>

<h3>Editar usuario</h3>
</div>

<div id="centro_content">




<?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
	<?php if($res===TRUE) : ?>
		<p>Los cambios se han guardado correctamente!</p>
	<?php else: ?>
		<p>No ha sido posible guardar los cambios realizados!</p>
	<?php endif; ?>

<?php else: ?>
<div id="containerRegistro">
	<form action='' method='post' enctype="multipart/form-data">

		<label for="username">Nombre:</label>
		<input class="login" type="text" id="nombre" name="nombre" value="<?php echo($row["nombre"]);?>">


		<label for="email">Apellidos:</label>
		<input class="login" type="text" id="apellidos" name="apellidos" value="<?php echo($row["apellidos"]);?>">





		<label for="categoria">Categoría:</label>
			<select id="categoria" name="categoria">
			  <option value="Titular"
					<?php if($row["categoria"]=="Titular"): ?>
						<?php echo "selected='selected'"?>
					<?php endif; ?>
			  >Titular</option>
			  <option value="Catedrático"
					<?php if($row["categoria"]=="Catedratico"): ?>
						<?php echo "selected='selected'"?>
					<?php endif; ?>
				>Catedrático</option>
			  <option value="Ayudante"
					<?php if($row["categoria"]=="Ayudante"): ?>
						<?php echo "selected='selected'"?>
					<?php endif; ?>
			  >Ayudante</option>
			</select>


		<label for="email">Teléfono de contacto:</label>
		<input class="login" type="text" id="telefono" name="telefono" value="<?php echo($row["telefono"]);?>">
		<br>


		<label for="email">Email:</label>
		<input class="login" type="text" id="email" name="email" value="<?php echo($row["email"]);?>">
		<br>


		<label for="url">URL personal:</label>
		<input class="login" type="text" id="url" name="url" value="<?php echo($row["url"]);?>">
		<br>


		<label for="departamento">Departamento:</label>
		<input class="login" type="text" id="departamento" name="departamento" value="<?php echo($row["departamento"]);?>">
		<br>


		<label for="centromus">Centro:</label>
		<input class="login" type="text" id="centromus" name="centromus" value="<?php echo($row["centro"]);?>">
		<br>


		<label for="instituto">Instituto de investigación:</label>
		<input class="login" type="text" id="instituto" name="instituto" value="<?php echo($row["instituto"]);?>">
		<br>


		<label for="direccion">Dirección:</label>
		<input class="login" type="text" id="direccion" name="direccion" value="<?php echo($row["direccion"]);?>">
		<br>


		<div id="lower">
			<input class="login" type="submit" value="Guardar cambios">
		</div>

	</form>
	
</div>

<?php endif; ?>



 
</div>
