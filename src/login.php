<?php


require 'dbConnect.php';

$loginError='';



function login(){
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];


	$res = dbConnect("SELECT password FROM usuarios WHERE email='$email'");
	$hash = array_values(mysqli_fetch_array($res))[0];


	if( password_verify($password, $hash) ) {
		$_SESSION['loggedin'] = true;
    	$_SESSION['username'] = $email;
		header("Location: index.php?sec=home");
		exit();
	} else {
		$loginError="Usuario/contraseña incorrectos";
	}


}





if(isset($_GET['act'])=='submit') {
	login();
}

?>