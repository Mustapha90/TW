<?php


require 'dbConnect.php';

$loginError = '';



function login() {
	$email = $_REQUEST[ 'email' ];
	$password = $_REQUEST[ 'password' ];


	$res = dbConnect( "SELECT password FROM usuarios WHERE email='$email'" );

	if ( mysqli_num_rows( $res ) == 0 ) {
		$loginError = "Usuario/contraseña incorrectos";
		$_SESSION[ 'error' ] = $loginError;
		header( "Location: index.php?sec=home" );
		exit();
	}

	$hash = array_values( mysqli_fetch_array( $res ) )[ 0 ];

	$res = dbConnect( "SELECT bloqueado FROM usuarios WHERE email='$email'" );
	$bloqueado = array_values( mysqli_fetch_array( $res ) )[ 0 ];

	if ( password_verify( $password, $hash ) ) {

		if ( $bloqueado == 0 ) {
			$_SESSION[ 'loggedin' ] = true;
			$_SESSION[ 'username' ] = $email;

			$res = dbConnect( "SELECT admin FROM usuarios WHERE email='$email'" );
			$admin = array_values( mysqli_fetch_array( $res ) )[ 0 ];
			$_SESSION[ 'admin' ] = $admin;

			registrarAccion( "Log In", $email );

			header( "Location: index.php?sec=home" );
			exit();
		} else {
			$loginError = "Su cuenta ha sido bloqueada, contacte con el administrador!";
			$_SESSION[ 'error' ] = $loginError;
		}
	} else {
		$loginError = "Usuario/contraseña incorrectos";
		$_SESSION[ 'error' ] = $loginError;
	}


}

if ( isset( $_GET[ 'act' ] ) == 'submit' ) {
	login();
}

?>