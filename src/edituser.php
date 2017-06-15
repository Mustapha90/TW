<?php

require 'dbConnect.php';

$target_dir = "images/";

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

	if(isset($_POST['admin']))
		$admin=1;	
	else
		$admin=0;	

	if(is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
		$imagen = $email . "_" . basename($_FILES["fileToUpload"]["name"]);
		$target_file = $target_dir . $imagen;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "Sorry, there was an error uploading your file.";
		} 
		$sql = "UPDATE usuarios SET nombre='$nombre', imagen='$imagen', 
								apellidos='$apellidos',
								categoria='$categoria',
								telefono='$telefono',
								url='$url',
								departamento='$departamento', 
								centro='$centro',
								instituto='$centro', 
								direccion='$direccion', admin='$admin' WHERE email='$email'";
	}
	else{
		$sql = "UPDATE usuarios SET nombre='$nombre', 
								apellidos='$apellidos',
								categoria='$categoria',
								telefono='$telefono',
								url='$url',
								departamento='$departamento', 
								centro='$centro',
								instituto='$centro', 
								direccion='$direccion', admin='$admin' WHERE email='$email'";
	}



	$res = dbConnect($sql);
	registrarAccion("Editar usuario", $_SESSION['username']);
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
	
	<div id="formImagen">
		<div id="foto_miembroeditar">
			<img src="images/<?php echo($row["imagen"]);?>" alt="Mountain View" style="width:100%;height:100%;">
									<label for="foto">Cambiar foto:</label>

									<input type="file" name="fileToUpload" id="fileToUpload">


		</div>

		

	</div>
	
		<div id="formDatos">

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

		<label for="admin">Otorgar privelegios de aministrador:</label>
 		<input type="checkbox" name="admin" value="admin"<?php if($row["admin"]) echo "checked";?>> 
		<br>
		<br>



		<div id="lower">
			<input class="login" type="submit" value="Guardar cambios">
		</div>
		
		</div>

	</form>
	
</div>

<?php endif; ?>



 
</div>
