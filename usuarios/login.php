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
		header("Location: http://sibw.com/index.php?sec=home");
		exit();
	} else {
		$loginError="Usuario/contraseña incorrectos";
		include("html/login.html");
	}
/*
	$login=dbConnect("SELECT * FROM usuarios WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($login) == 1){ 
		$_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
		header("Location: http://sibw.com/index.php?sec=home");
		exit();
	}
	else{
		$loginError="Usuario/contraseña incorrectos";
		include("html/login.html");
	}
*/

}





if(isset($_GET['act'])=='submit') {
	login();
}else{
	include("html/login.html");
}
