<h3>Editar publicación</h3>
</div>


<?php

if (!isset($_SESSION["admin"])) {
	return include("html/deny.html");
}

require 'src/dbConnect.php';

$errordoi='';
$error=false;

$doi = $_GET[ "doi" ];
$tipo = $_GET[ "tipo" ];
$tabla='';

if($tipo=="articulo"){
	$tabla="articulos";
}
else if($tipo=="libro"){
	$tabla="libros";
}
else if($tipo=="capitulo"){
	$tabla="cpitulos";
}
else{
	$tabla="conferencias";
}


$res = dbConnect( "SELECT * FROM $tabla WHERE doi='$doi'" );
$row = $res->fetch_assoc();


$res2 = dbConnect( "SELECT * FROM autoresmiembros WHERE doi='$doi'" );

$res3 = dbConnect("SELECT email FROM usuarios where email not in( SELECT autoresmiembros.nombrecompleto FROM autoresmiembros where autoresmiembros.doi='$doi')");

$res4 = dbConnect( "SELECT * FROM autoresexternos WHERE doi='$doi'" );
$res5 = dbConnect( "SELECT * FROM keywords WHERE doi='$doi'" );

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$titulo= $_POST['titulo'];

	if(isset($_POST['checkboxlist1'])){
		$autores= array_filter($_POST['checkboxlist1']);
	}
	else{
		$autores=[];
	}

	if(isset($_POST['checkboxlist2'])){
		$autoresexternos1= array_filter($_POST['checkboxlist2']);
	}
	else{
		$autoresexternos1=[];
	}

	if(isset($_POST['checkboxlist3'])){
			$keywordsreg= array_filter($_POST['checkboxlist3']);
	}
	else{
		$keywordsreg=[];
	}

	$autoresexternos= array_filter($_POST['autoresexternos']);

	$fecha= $_POST['fecha'];
	$resumen= $_POST['resumen'];
	$keywords= array_filter($_POST['keywords']);

	$url= $_POST['url'];


	$sql = "SELECT doi FROM  
			(SELECT doi FROM articulos union
			SELECT doi FROM libros union
			SELECT doi FROM capitulos union
			SELECT doi FROM conferencias) s WHERE s.doi='$doi'"; 

	dbConnect("DELETE from keywords where doi='$doi'");
	dbConnect("DELETE from autoresmiembros where doi='$doi'");
	dbConnect("DELETE from autoresexternos where doi='$doi'");


	if($tipo=="articulo"){
			$articulonombre = $_POST['articulonombre'];
			$articulovolumen = $_POST['articulovolumen'];
			$articulopaginas = $_POST['articulopaginas'];

			$update1 = dbConnect("UPDATE articulos SET titulo='$titulo', fecha='$fecha', resumen='$resumen', url='$url', nombre='$articulonombre', volumen='$articulonombre', paginas='$articulopaginas' where doi='$doi'");
	}
	else if($tipo=="libro"){
			$libroeditorial = $_POST['libroeditorial'];
			$libroeditor = $_POST['libroeditor'];
			$libroisbn = $_POST['libroisbn'];

			$update1 = dbConnect("UPDATE libros SET titulo='$titulo', fecha='$fecha', resumen='$resumen', url='$url', editorial='$libroeditorial', editor='$libroeditor', isbn='$libroisbn' where doi='$doi'");

	}

	else if($tipo=="capitulo"){
			$capitulotitulolibro = $_POST['capitulotitulolibro'];
			$capituloeditorial = $_POST['capituloeditorial'];
			$capituloeditor = $_POST['capituloeditor'];
			$capituloisbn = $_POST['capituloisbn'];
			$capitulopaginas = $_POST['capitulopaginas'];



			$update1 = dbConnect("UPDATE capitulos SET titulo='$titulo', fecha='$fecha', resumen='$resumen', url='$url', titulolibro='$capitulotitulolibro', editorial='$capituloeditorial', editor='$capituloeditor', isbn='$capituloisbn', paginas='$capitulopaginas' where doi='$doi'");

	}
	else{
			$confnombre = $_POST['confnombre'];
			$conflugar = $_POST['conflugar'];
			$confresenia = $_POST['confresenia'];


			$update1 = dbConnect("UPDATE conferencias SET titulo='$titulo', fecha='$fecha', resumen='$resumen', url='$url',  nombre='$confnombre', lugar='$conflugar', resenia='$confresenia' where doi='$doi'");
	}




	foreach ($autores as $autor) {
		if($autor!=''){
			$update1 = dbConnect("INSERT INTO autoresmiembros (nombrecompleto, doi) VALUES ('$autor','$doi')");
		}
	}


	foreach ($autoresexternos as $autorx) {
			$update1 = dbConnect("INSERT INTO autoresexternos (nombrecompleto, doi) VALUES ('$autorx','$doi')");
	}

	foreach ($autoresexternos1 as $autorx) {
		if($autorx!=''){
			$update1 = dbConnect("INSERT INTO autoresexternos (nombrecompleto, doi) VALUES ('$autorx','$doi')");
		}
	}

	foreach ($keywords as $keyword) {
			$update1 = dbConnect("INSERT INTO keywords (keyword, doi) VALUES ('$keyword','$doi')");
	}

	foreach ($keywordsreg as $keyword) {
		if($keyword!=''){
			$update1 = dbConnect("INSERT INTO keywords (keyword, doi) VALUES ('$keyword','$doi')");
		}
	}

	registrarAccion("Editar Publicación", $_SESSION['username']);

}
else{
	$res = dbConnect("SELECT nombre, apellidos, email from usuarios");
	$res1 = dbConnect("SELECT codpro, titulo from proyectos");
	include("src/formeditpub.php");
}
?>

