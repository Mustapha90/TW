
<h3>Editar proyecto</h3>
</div>

<?php

if (!isset($_SESSION["admin"])) {
	return include("html/deny.html");
}

require 'src/dbConnect.php';

$errorcodpro = '';
$error=false;
$codpro = $_GET['project'];
// Obtener investigadores miembros de la base de datos
$sql1 = "SELECT * FROM colaboradoresmiembros where codpro='$codpro'";
  
$res1 = dbConnect($sql1);



$sql2 = "SELECT * FROM colaboradoresexternos where codpro='$codpro'";
  
$res2 = dbConnect($sql2);


$sql3 = "SELECT email FROM usuarios where email not in( SELECT colaboradoresmiembros.email FROM colaboradoresmiembros where colaboradoresmiembros.codpro='$codpro')";
  
$res3 = dbConnect($sql3);

$sql4 = "SELECT * from entidadescolaboradoras where codpro='$codpro'";
  
$res4 = dbConnect($sql4);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$titulo= $_POST['titulo'];
$descripcion= $_POST['descripcion'];
$fechacomienzo= $_POST['fechacomienzo'];
$fechafin= $_POST['fechafin'];
$entidades= $_POST['entidades'];

$cuantia= $_POST['cuantia'];
$investigador= $_POST['investigador'];
$url= $_POST['url'];
$inv_externos = $_POST['myInputs'];


if(isset($_POST['checkboxlist1']))
	$colabs = $_POST['checkboxlist1'];
else
	$colabs =[];

if(isset($_POST['checkboxlist2']))
	$colabsext = $_POST['checkboxlist2'];
else
	$colabsext =[];

if(isset($_POST['entidadesreg']))
	$entidadesreg = $_POST['entidadesreg'];
else
	$entidadesreg =[];

$entidades = $_POST['entidades'];

$sql5 = "DELETE from entidadescolaboradoras where codpro='$codpro'";
  
$res5 = dbConnect($sql5);



$sql6 = "DELETE from colaboradoresmiembros where codpro='$codpro'";
  
$res6 = dbConnect($sql6);

$sql7 = "DELETE from colaboradoresexternos where codpro='$codpro'";
  
$res7 = dbConnect($sql7);


$insert1 = dbConnect("UPDATE proyectos SET titulo='$titulo', descripcion='$descripcion',fechacomienzo='$fechacomienzo', fechafin='$fechafin', cuantia='$cuantia', investigador='$investigador', url='$url' where codpro='$codpro'");

if(!$insert1){
	die("No se ha podido añadir el proyecto: ");
}


foreach ($colabs as $colaborador) {
	if($colaborador!=""){
		$insert2 = dbConnect("INSERT INTO colaboradoresmiembros (email, codpro) VALUES ('$colaborador','$codpro')");
	}
}


foreach ($colabsext as $c) {
	if($c!=""){
		$insert2 = dbConnect("INSERT INTO colaboradoresexternos (nombrecompleto, codpro) VALUES ('$c','$codpro')");
	}
}

foreach ($inv_externos as $col) {
	if($col!=""){
		$insert3 = dbConnect("INSERT INTO colaboradoresexternos (nombrecompleto, codpro) VALUES ('$col','$codpro')");
	}
}


foreach ($entidades as $entidad) {
	if($entidad!=""){
		$insert3 = dbConnect("INSERT INTO entidadescolaboradoras (nombre, codpro) VALUES ('$entidad','$codpro')");
	}
}

foreach ($entidadesreg as $entidadreg) {
	if($entidadreg!=""){
		$insert3 = dbConnect("INSERT INTO entidadescolaboradoras (nombre, codpro) VALUES ('$entidadreg','$codpro')");
}
}


registrarAccion("Modificar Proyecto", $_SESSION['username']);
}

else{
	$res = dbConnect("SELECT nombre, apellidos, email from usuarios");
	include("src/formeditproyecto.php");
}
?>
