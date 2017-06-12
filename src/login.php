<?php


require 'dbConnect.php';

$loginError='';



function login(){
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];


	$res = dbConnect("SELECT password FROM usuarios WHERE email='$email'");

	if(mysqli_num_rows($res)==0){	
	    $loginError="Usuario/contraseña incorrectos";
		$_SESSION['error'] = $loginError;
		header("Location: index.php?sec=home");
		exit();
	}

	$hash = array_values(mysqli_fetch_array($res))[0];


	if( password_verify($password, $hash) ) {
		$_SESSION['loggedin'] = true;
    	$_SESSION['username'] = $email;

		$res = dbConnect("SELECT admin FROM usuarios WHERE email='$email'");
		$admin = array_values(mysqli_fetch_array($res))[0];
    	$_SESSION['admin'] = $admin;
		header("Location: index.php?sec=home");
		exit();
	} else {
		$loginError="Usuario/contraseña incorrectos";
		$_SESSION['error'] = $loginError;
	}


}

if(isset($_GET['act'])=='submit') {
	login();
}

?>
