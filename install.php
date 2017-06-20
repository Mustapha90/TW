	<?php

	$emailError = '';
	$email = '';
	$nombre = '';
	$password = '';


	$apellidos = '';
	$categoria = '';
	$telefono = '';
	$url = '';
	$departamento = '';
	$centro = '';
	$instituto = '';
	$direccion = '';
	$director = '';
	$success = 0;


	function validateForm() {
		$errores = 0;
		global $nombre, $email, $password, $apellidos, $categoria, $telefono, $url, $departamento, $centro, $instituto, $direccion, $target_dir, $target_file, $imageFileType, $imageError, $emailError;

		$email = filter_var( $_POST[ 'email' ], FILTER_SANITIZE_EMAIL );
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

		return $errores;
	}


	function register() {
		global $nombre, $email, $password, $nombre, $apellidos, $categoria, $telefono, $url, $departamento, $centro, $instituto, $direccion, $target_dir, $target_file, $imageFileType, $success;
		$hash = password_hash( $password, \PASSWORD_DEFAULT );




		if ( isset( $_POST[ 'director' ] ) )
			$director = 1;
		else
			$director = 0;



		$insert = dbConnect( "INSERT INTO usuarios (admin,nombre, email, password, director, apellidos, categoria, telefono, url, departamento, centro, instituto, direccion) VALUES ('1', '$nombre','$email','$hash','$director', '$apellidos', '$categoria', '$telefono', '$url', '$departamento', '$centro', '$instituto', '$direccion')" );

		if ( !$insert ) {
			die( "No se ha podido registrar el usuario: " );
		}

		$success = 1;
	}


	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$dbhost = var_export($_POST[ 'host' ],true);
		$dbuser = var_export($_POST[ 'user' ],true);
		$dbpass = var_export($_POST[ 'passdb' ],true);
		$dbname = var_export($_POST[ 'bdname' ],true);


		$contenido = "<?php\ndefine(\"DB_HOST\", $dbhost);
				\ndefine(\"DB_USER\", $dbuser);
				\ndefine(\"DB_PASSWORD\", $dbpass);
				\ndefine(\"DB_NAME\", $dbname);\n?>";

		file_put_contents('src/dbconfig.php', $contenido);


		$target_dir    = "backup/";
		$server_name   = $dbhost;
		$username      = $dbuser;
		$password      = $dbpass;
		$database_name = $dbname;
		$target_file = "backup/TWBD.sql";

		$cmd = "mysql -h {$server_name} -u {$username} -p{$password} {$database_name} < $target_file";
		echo exec($cmd);
		

		require 'src/dbConnect.php';
		
		$errores = validateForm();
		if ( $errores != 0 ) {
			include( "html/forminstall.html" );
		} else { // Si no hay errores en el formulario de usuario
			register();
		}
	} else {
		include( "html/forminstall.html" );
	}

	?>

	<?php if($success): ?>
	<div id="centro_content2">
		<h4>La instalación se ha realizado correctamente!</h4>
	</div>
	<?php endif; ?>





