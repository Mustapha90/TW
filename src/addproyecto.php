
<h3>Añadir proyecto</h3>
</div>

<?php

if (!isset($_SESSION["loggedin"])) {
	return include("html/deny.html");
}

require 'src/dbConnect.php';

$errorcodpro = '';
$error=false;

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
$entidades = $_POST['entidades'];



$existeProyecto = dbConnect( "SELECT * FROM proyectos WHERE codpro='$codpro'" );
if ( mysqli_num_rows( $existeProyecto ) == 1 ) {
	$errorcodpro = "Ya existe un proyecto con el mismo código!";
	$error = true;
}


if(!$error){

$insert1 = dbConnect("INSERT INTO proyectos (codpro, titulo, descripcion,fechacomienzo, fechafin, cuantia, investigador, url) VALUES ('$codpro','$titulo','$descripcion','$fechacomienzo', '$fechafin', '$cuantia', '$investigador', '$url')");

		if(!$insert1){
			die("No se ha podido añadir el proyecto: ");
		}


foreach ($colabs as $colaborador) {
	$insert2 = dbConnect("INSERT INTO colaboradoresmiembros (email, codpro) VALUES ('$colaborador','$codpro')");
}



foreach ($inv_externos as $col) {
	$insert3 = dbConnect("INSERT INTO colaboradoresexternos (nombrecompleto, codpro) VALUES ('$col','$codpro')");
}


foreach ($entidades as $entidad) {
	$insert3 = dbConnect("INSERT INTO entidadescolaboradoras (nombre, codpro) VALUES ('$entidad','$codpro')");
}


registrarAccion("Añadir Proyecto", $_SESSION['username']);
}

else{
	$res = dbConnect("SELECT nombre, apellidos, email from usuarios");
	include("src/formproyecto.php");
}
}

else{
	$res = dbConnect("SELECT nombre, apellidos, email from usuarios");
	include("src/formproyecto.php");
}
?>


