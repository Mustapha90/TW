<?php
error_reporting(-1);
ini_set('display_errors', 'On');



require 'dbConnect.php';

$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  


$sql = "SELECT doi, titulo, fecha, resumen, url, codpro, tipo FROM  
	    (SELECT doi, titulo, fecha, resumen, url, codpro, tipo FROM articulos union all
		SELECT doi, titulo, fecha, resumen, url, codpro, tipo FROM libros union all
		SELECT doi, titulo, fecha, resumen, url, codpro, tipo FROM capitulos union all
		SELECT doi, titulo, fecha, resumen, url, codpro, tipo FROM conferencias) s ORDER BY fecha DESC LIMIT $start_from, $limit"; 

$res = dbConnect($sql);

?>


<?php while($row = $res->fetch_assoc()) : ?>
	<?php $doi = $row["doi"];?>
	<table id="tablaproyecto">
	  <tr>
		<th>DOI</th>
		<td><?php echo($row["doi"]);?></td>
	  </tr>
	  
	  <tr>
		 <th>Título</th>
		<td><?php echo($row["titulo"]);?></td>
	  </tr>

 	  <tr>
		<th>Fecha de publicación</th>
		<td><?php echo($row["fecha"]);?></td>

	  </tr>
	  
	  <tr>
		 <th>Resumen</th>
		<td><?php echo($row["resumen"]);?></td>
	  </tr>
	  
 	  <tr>
		<th>URL</th>
		<td><?php echo($row["url"]);?></td>
	  </tr>
	  
 	  <tr>
		<th>Proyecto</th>
		<td><?php echo($row["codpro"]);?></td>
	  </tr>


<?php if($row["tipo"]==="articulo"): ?>

<?php
	$sql = "SELECT nombre, volumen, paginas from articulos where doi='$doi'";
	$resultado = dbConnect($sql);
	$articulo = $resultado->fetch_assoc();
?>
	  <tr>
		 <th>Nombre de la revista</th>
		<td><?php echo($articulo["nombre"]);?></td>
	  </tr>
	  
 	  <tr>
		<th>Volumen</th>
		<td><?php echo($articulo["volumen"]);?></td>
	  </tr>
	  
 	  <tr>
		<th>Número de páginas</th>
		<td><?php echo($articulo["paginas"]);?></td>
	  </tr>

<?php elseif($row["tipo"]==="capitulo"): ?>

<?php
	$sql = "SELECT titulolibro, editorial, editor, isbn, paginas from capitulos where doi='$doi'";
	$resultado = dbConnect($sql);
	$capitulo = $resultado->fetch_assoc();
?>

	  <tr>
		 <th>Título del libro</th>
		<td><?php echo($capitulo["titulolibro"]);?></td>
	  </tr>
	  
 	  <tr>
		<th>Editorial</th>
		<td><?php echo($capitulo["editorial"]);?></td>
	  </tr>
	  
 	  <tr>
		<th>Editor</th>
		<td><?php echo($capitulo["editor"]);?></td>
	  </tr>

	  <th>ISBN</th>
		<td><?php echo($capitulo["isbn"]);?></td>
	  </tr>

	  <th>Número de páginas</th>
		<td><?php echo($capitulo["paginas"]);?></td>
	  </tr>


<?php elseif($row["tipo"]==="libro"): ?>


<?php
	$sql = "SELECT editorial, editor, isbn from libros where doi='$doi'";
	$resultado = dbConnect($sql);
	$libro = $resultado->fetch_assoc();
?>

 	  <tr>
		<th>Editorial</th>
		<td><?php echo($libro["editorial"]);?></td>
	  </tr>
	  
 	  <tr>
		<th>Editor</th>
		<td><?php echo($libro["editor"]);?></td>
	  </tr>

	  <th>ISBN</th>
		<td><?php echo($libro["isbn"]);?></td>
	  </tr>



<?php else: ?>

<?php
	$sql = "SELECT nombre, lugar, resenia from conferencias where doi='$doi'";
	$resultado = dbConnect($sql);
	$conferencia = $resultado->fetch_assoc();
?>

 	  <tr>
		<th>Nombre de la conferencia</th>
		<td><?php echo($conferencia["nombre"]);?></td>
	  </tr>
	  
 	  <tr>
		<th>Lugar</th>
		<td><?php echo($conferencia["lugar"]);?></td>
	  </tr>

	  <th>Reseña</th>
		<td><?php echo($conferencia["resenia"]);?></td>
	  </tr>
<?php endif; ?>

	</table>

<?php endwhile; ?> 	





	

