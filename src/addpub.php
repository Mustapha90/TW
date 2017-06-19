
<h3>Añadir una publicación</h3>
</div>

<?php

if (!isset($_SESSION["loggedin"])) {
	return include("html/deny.html");
}

require 'src/dbConnect.php';

$errordoi='';
$error=false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$doi= $_POST['doi'];
$titulo= $_POST['titulo'];
$autores= array_filter($_POST['autores']);
$autoresexternos= array_filter($_POST['autoresexternos']);
$fecha= $_POST['fecha'];
$resumen= $_POST['resumen'];
$keywords= array_filter($_POST['keywords']);
$url= $_POST['url'];
$codpro = $_POST['selectcodpro'];
$tipo = $_POST['tipopub'];


$sql = "SELECT doi FROM  
	    (SELECT doi FROM articulos union
		SELECT doi FROM libros union
		SELECT doi FROM capitulos union
		SELECT doi FROM conferencias) s WHERE s.doi='$doi'"; 

$existePub = dbConnect( $sql );

if ( mysqli_num_rows( $existePub ) != 0 ) {
	$errordoi = "Ya existe una publicación con el mismo código!";
	$error = true;
}


if(!$error){
		if($tipo=="articulo"){
				$articulonombre = $_POST['articulonombre'];
				$articulovolumen = $_POST['articulovolumen'];
				$articulopaginas = $_POST['articulopaginas'];

				$insert1 = dbConnect("INSERT INTO articulos (doi, titulo, fecha, resumen, url, codpro, nombre, volumen, paginas) VALUES ('$doi','$titulo','$fecha','$resumen', '$url', '$codpro', '$articulonombre', '$articulovolumen', '$articulopaginas')");
		}
		else if($tipo=="libro"){
				$libroeditorial = $_POST['libroeditorial'];
				$libroeditor = $_POST['libroeditor'];
				$libroisbn = $_POST['libroisbn'];

				$insert1 = dbConnect("INSERT INTO libros (doi, titulo, fecha, resumen, url, codpro, editorial, editor, isbn) VALUES ('$doi','$titulo','$fecha','$resumen', '$url', '$codpro', '$libroeditorial', '$libroeditor', '$libroisbn')");
		}

		else if($tipo=="capitulo"){
				$capitulotitulolibro = $_POST['capitulotitulolibro'];
				$capituloeditorial = $_POST['capituloeditorial'];
				$capituloeditor = $_POST['capituloeditor'];
				$capituloisbn = $_POST['capituloisbn'];
				$capitulopaginas = $_POST['capitulopaginas'];

				$insert1 = dbConnect("INSERT INTO capitulos (doi, titulo, fecha, resumen, url, codpro, titulolibro, editorial, editor, isbn, paginas) VALUES ('$doi','$titulo','$fecha','$resumen', '$url', '$codpro', '$capitulotitulolibro', '$capituloeditorial', '$capituloeditor', '$capituloisbn', '$capitulopaginas')");
		}
		else{
				$confnombre = $_POST['confnombre'];
				$conflugar = $_POST['conflugar'];
				$confresenia = $_POST['confresenia'];

				$insert1 = dbConnect("INSERT INTO conferencias (doi, titulo, fecha, resumen, url, codpro, nombre, lugar, resenia) VALUES ('$doi','$titulo','$fecha','$resumen', '$url', '$codpro', '$confnombre', '$conflugar', '$confresenia')");
		}


		// Insertar autores miembros
		foreach ($autores as $autor) {
				$insert1 = dbConnect("INSERT INTO autoresmiembros (nombrecompleto, doi) VALUES ('$autor','$doi')");
		}

		// Insertar autores externos
		foreach ($autoresexternos as $autorx) {
				$insert1 = dbConnect("INSERT INTO autoresexternos (nombrecompleto, doi) VALUES ('$autorx','$doi')");
		}

		//Insertar keywords
		foreach ($keywords as $keyword) {
				$insert1 = dbConnect("INSERT INTO keywords (keyword, doi) VALUES ('$keyword','$doi')");
		}

				registrarAccion("Añadir Publicación", $_SESSION['username']);
}else{
	$res = dbConnect("SELECT nombre, apellidos, email from usuarios");
	$res1 = dbConnect("SELECT codpro, titulo from proyectos");
	include("src/formpublicacion.php");
}

}
else{
	$res = dbConnect("SELECT nombre, apellidos, email from usuarios");
	$res1 = dbConnect("SELECT codpro, titulo from proyectos");
	include("src/formpublicacion.php");
}
?>

