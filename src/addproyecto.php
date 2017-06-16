
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
$inv_externos = $_POST['myInputs'];
$colabs = $_POST['multicheckbox'];


$insert1 = dbConnect("INSERT INTO proyectos (codpro, titulo, descripcion,fechacomienzo, fechafin, entidades, cuantia, investigador, url) VALUES ('$codpro','$titulo','$descripcion','$fechacomienzo', '$fechafin', '$entidades', '$cuantia', '$investigador', '$url')");

		if(!$insert1){
			die("No se ha podido añadir el proyecto: ");
		}


foreach ($colabs as $colaborador) {
	$insert2 = dbConnect("INSERT INTO colaboradoresmiembros (email, codpro) VALUES ('$colaborador','$codpro')");

		if(!$insert2){
			die("No se ha podido añadir el proyecto: ");
		}
}



foreach ($inv_externos as $col) {
	$insert3 = dbConnect("INSERT INTO colaboradoresexternos (nombrecompleto, codpro) VALUES ('$col','$codpro')");

		if(!$insert3){
			die("No se ha podido añadir el proyecto: ");
		}
}


		registrarAccion("Añadir Proyecto", $_SESSION['username']);
	

}
else{
	$res = dbConnect("SELECT nombre, apellidos, email from usuarios");
	include("src/formproyecto.php");
}


?>
