<h3>Añadir miembro</h3>
</div>


<div id="centro_content">
	<?php

	if (!isset($_SESSION["admin"])) {
		return include("html/deny.html");
	}


	require 'src/dbConnect.php';

	set_time_limit( 0 );
	ini_set( 'upload_max_filesize', '500M' );
	ini_set( 'post_max_size', '500M' );
	ini_set( 'max_input_time', 4000 );
	ini_set( 'max_execution_time', 4000 );


	$target_dir = "images/";
	$imageFileType = '';
	$target_file = '';

	$emailError = '';
	$email = '';
	$nombre = '';
	$password = '';
	$imageError = '';


	$apellidos = '';
	$categoria = '';
	$telefono = '';
	$url = '';
	$departamento = '';
	$centro = '';
	$instituto = '';
	$direccion = '';
	$imagen = '';
	$admin = '';
	$director = '';
	$success = 0;


	function validateForm() {
		$errores = 0;
		global $nombre, $email, $password, $apellidos, $categoria, $telefono, $url, $departamento, $centro, $instituto, $direccion, $target_dir, $target_file, $imageFileType, $imagen, $imageError, $emailError;


		if ( isset( $_POST[ 'email' ] ) ) {
			$email = filter_var( $_POST[ 'email' ], FILTER_SANITIZE_EMAIL );
			$existeEmail = dbConnect( "SELECT * FROM usuarios WHERE email='$email'" );
				if ( mysqli_num_rows( $existeEmail ) == 1 ) {
					$emailError = "Este email ya existe!";
					$errores = 1;
				}
		}

		$nombre = $_POST[ 'nombre' ];
		$apellidos = $_POST[ 'apellidos' ];
		$categoria = $_POST[ 'categoria' ];
		$telefono = $_POST[ 'telefono' ];
		$url = $_POST[ 'url' ];
		$departamento = $_POST[ 'departamento' ];
		$centro = $_POST[ 'centromus' ];
		$instituto = $_POST[ 'instituto' ];
		$direccion = $_POST[ 'direccion' ];
		$password = $_POST[ 'password' ];



		$imagen = $email . "_" . basename( $_FILES[ "fileToUpload" ][ "name" ] );
		$target_file = $target_dir . $imagen;
		$imageFileType = pathinfo( $target_file, PATHINFO_EXTENSION );


		if ( $_FILES[ "fileToUpload" ][ "size" ] > 500000 ) {
			$imageError = "El tamaño del fichero supera el tamaño máximo.";
			$errores = 1;
		}

		return $errores;

	}


	function register() {
		global $nombre, $email, $password, $nombre, $apellidos, $categoria, $telefono, $url, $departamento, $centro, $instituto, $direccion, $target_dir, $target_file, $imageFileType, $imagen, $admin, $success;
		$hash = password_hash( $password, \PASSWORD_DEFAULT );

		if ( isset( $_POST[ 'admin' ] ) )
			$admin = 1;
		else
			$admin = 0;


		if ( isset( $_POST[ 'director' ] ) )
			$director = 1;
		else
			$director = 0;

		if ( !( move_uploaded_file( $_FILES[ "fileToUpload" ][ "tmp_name" ], $target_file ) ) ) {
			echo "Ha habido un error al subir la foto";
		}

		$insert = dbConnect( "INSERT INTO usuarios (nombre, email, password,admin, director, apellidos, categoria, telefono, url, departamento, centro, instituto, direccion, imagen) VALUES ('$nombre','$email','$hash','$admin','$director', '$apellidos', '$categoria', '$telefono', '$url', '$departamento', '$centro', '$instituto', '$direccion', '$imagen')" );

		if ( !$insert ) {
			die( "No se ha podido registrar el usuario: " );
		}
		registrarAccion( "Añadir miembro", $_SESSION[ 'username' ] );

		$success = 1;
	}


	if ( isset( $_GET[ 'act' ] ) == 'register' ) {
		$errores = validateForm();
		if ( $errores != 0 ) {
			include( "html/adduser.html" );
		} else {
			register();
		}
	} else {
		include( "html/adduser.html" );
	}


	?>

	<?php if($success): ?>
	<div id="centro_content2">
		<h4>El usuario se ha registrado correctamente!</h4>
	</div>
	<?php endif; ?>

</div>
