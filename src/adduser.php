
<h3>Añadir miembro</h3>
</div>


<div id="centro_content">
<div id="registerOK">
	<?php


	require 'src/dbConnect.php';

	set_time_limit(0);
	ini_set('upload_max_filesize', '500M');
	ini_set('post_max_size', '500M');
	ini_set('max_input_time', 4000);
	ini_set('max_execution_time', 4000);


	$target_dir = "images/";
	$imageFileType = '';
	$target_file='';

	$emailError='';
	$passwordError='';
	$passwordConfError='';
	$email='';
	$nombre='';
	$password='';
	$imageError='';


	$apellidos='';
	$categoria='';
	$telefono=''; 
	$url='';
	$departamento=''; 
	$centro='';
	$instituto=''; 
	$direccion='';
	$imagen='';
	$admin='';


	function validateForm(){
		$errores=0;
		global $emailError, $passwordError,$passwordConfError, $email, $password;
		global $nombre, $email, $password, $nombre, $apellidos, $categoria, $telefono, $url, $departamento, $centro, $instituto, $direccion, $target_dir, $target_file, $imageFileType, $imagen, $imageError;


		if (isset($_POST['email'])) {
			$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailError =  "Introduzca un email válido!"; 
							$errores=1;
			}
					else{
							$existeEmail=dbConnect("SELECT * FROM usuarios WHERE email='$email'");
							if(mysqli_num_rows($existeEmail) == 1){ 
								$emailError =  "Este email ya existe!"; 
								$errores=1;
							}
					}
	   }

		if (isset($_POST['password'])){
			$password=$_POST['password'];
			if(strlen($password)<6) { 
				$passwordError="La contraseña debe contener al menos 6 caracteres";
				$errores=1;
			}
			else{
				if (isset($_POST['passwordConf'])){
					$passwordConf=$_POST['passwordConf'];
					if($password != $passwordConf) { 
						$passwordConfError="Las contraseñas no coinciden";
						$errores=1;
				}
			}
			}

		}

	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$categoria=$_POST['categoria'];
	$telefono=$_POST['telefono']; 
	$url=$_POST['url'];
	$departamento=$_POST['departamento']; 
	$centro=$_POST['centromus'];
	$instituto=$_POST['instituto']; 
	$direccion=$_POST['direccion'];



	$imagen = $email . "_" . basename($_FILES["fileToUpload"]["name"]);
	$target_file = $target_dir . $imagen;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


	if ($_FILES["fileToUpload"]["size"] > 500000) {
		$imageError=  "El tamaño del fichero supera el tamaño máximo.";
		$errores = 1;
	}


	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		$imageError =  "Solo se permiten los formatos, JPG, JPEG, PNG y GIF.";
		$errores = 1;
	}
		return $errores;

	}


	function register(){
		global $nombre, $email, $password, $nombre, $apellidos, $categoria, $telefono, $url, $departamento, $centro, $instituto, $direccion, $target_dir, $target_file, $imageFileType, $imagen, $admin;
		$hash = password_hash($password, \PASSWORD_DEFAULT);

		if(isset($_POST['admin']))
			$admin=1;	
		else
			$admin=0;	
			
		if (!(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))) {
			echo "Ha habido un error al subir la foto";
		} 

		$insert = dbConnect("INSERT INTO usuarios (nombre, email, password,admin, apellidos, categoria, telefono, url, departamento, centro, instituto, direccion, imagen) VALUES ('$nombre','$email','$hash','$admin', '$apellidos', '$categoria', '$telefono', '$url', '$departamento', '$centro', '$instituto', '$direccion', '$imagen')");

		if(!$insert){
			die("No se ha podido registrar el usuario: ");
		}
			registrarAccion("Añadir miembro", $_SESSION['username']);
		
			echo "<br>" . $nombre. " ha sido añadido correctamente como miembro";		
	}


	if(isset($_GET['act'])=='register') {
			$errores = validateForm();
			if($errores!=0){
				include("html/adduser.html");
			}
			else{
				register();
			}
	}else{
			include("html/adduser.html");
	}


	?>
	
	
</div>
