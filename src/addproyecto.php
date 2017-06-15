
<?php

require 'src/dbConnect.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$codpro= $_POST['codpro'];
$titulo= $_POST['titulo'];
$descripcion= $_POST['descripcion'];
$fechacomienzo= $_POST['fechacomienzo'];
$fechafin= $_POST['fechafin'];
$entidades= $_POST['entidades'];
$cuantia= $_POST['cuantia'];
$investigador= $_POST['investigador'];

$url= $_POST['url'];
$investigadores = $_POST['myInputs'];

echo $investigadores[0];

echo $_POST['miembros'];


$insert = dbConnect("INSERT INTO proyectos (codpro, titulo, descripcion,fechacomienzo, fechafin, entidades, cuantia, investigador, url) VALUES ('$codpro','$titulo','$descripcion','$fechacomienzo', '$fechafin', '$entidades', '$cuantia', '$investigador', '$url')");

		if(!$insert){
			die("No se ha podido añadir el proyecto: ");
		}
			registrarAccion("Añadir Proyecto", $_SESSION['username']);
	   }


else{
	$res = dbConnect("SELECT nombre, apellidos, email from usuarios");
	include("src/formproyecto.php");
}


?>
