<?php
error_reporting(-1);
ini_set('display_errors', 'On');



require 'dbConnect.php';

$limit = 1;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM proyectos ORDER BY fechacomienzo DESC LIMIT $start_from, $limit";  


$res = dbConnect($sql);

?>

<?php while($row = $res->fetch_assoc()) : ?>
	<?php $codpro = $row["codpro"];?>
	<table id="tablaproyecto">
	  <tr>
		<th>Código del proyecto</th>
		<td><?php echo($row["codpro"]);?></td>
	  </tr>
	  
	  <tr>
		 <th>Título</th>
		<td><?php echo($row["titulo"]);?></td>
	  </tr>

 	  <tr>
		<th>Descripción</th>
		<td><?php echo($row["descripcion"]);?></td>

	  </tr>
	  
	  <tr>
		 <th>Fecha de comienzo</th>
		<td><?php echo($row["fechacomienzo"]);?></td>
	  </tr>
	  
 	  <tr>
		<th>Fecha de fin</th>
		<td><?php echo($row["fechafin"]);?></td>

	  </tr>
	  
	  <tr>
		 <th>Entidades colaboradoras</th>
		<?php
			$sql1 = "SELECT nombre FROM entidadescolaboradoras where codpro='$codpro'";  
			$res1 = dbConnect($sql1);
		?>
		<td>
			<ul>
			<?php while($row1 = $res1->fetch_assoc()) : ?>
				<li><?php echo($row1["nombre"]);?></li>
			<?php endwhile; ?> 	
			</ul>
		</td>
	  </tr>

 	  <tr>
		<th>Cuantía concedida</th>
		<td><?php echo($row["cuantia"]);?> €</td>

	  </tr>
	  
	  <tr>
		 <th>Investigador principal</th>
		<td><?php echo($row["investigador"]);?></td>
	  </tr> 
	  
	  <tr>
		 <th>Investigadores colaboradores</th>
		<td>
		<?php
			$sql1 = "SELECT nombre, apellidos FROM usuarios, colaboradoresmiembros, proyectos where colaboradoresmiembros.email=usuarios.email and colaboradoresmiembros.codpro=proyectos.codpro and proyectos.codpro=$codpro";  
			$res1 = dbConnect($sql1);
		?>

		Miembros:
			<ul>
			<?php while($row1 = $res1->fetch_assoc()) : ?>
				<li><?php echo($row1["nombre"]); echo(" "); echo($row1["apellidos"]);?></li>
			<?php endwhile; ?> 	
			</ul>


		<?php
			$sql1 = "SELECT nombrecompleto FROM colaboradoresexternos where codpro='$codpro'";  
			$res1 = dbConnect($sql1);
		?>

		Externos:
			<ul>
			<?php while($row1 = $res1->fetch_assoc()) : ?>
				<li><?php echo($row1["nombrecompleto"]);?></li>
			<?php endwhile; ?> 	
			</ul>
		</td>
	  </tr> 
	  
	  <tr>
		 <th>URL</th>
		<td><?php echo($row["url"]);?></td>
	  </tr>
	  
	  <tr>
		 <th>Publicaciones</th>
		<td>
			<ul>
				<li> Referencia a publicación 1</li>
				<li> Referencia a publicación 2</li>
				<li> Referencia a publicación 3</li>
				<li> Referencia a publicación 4</li>
			</ul>
		</td>
	  </tr> 	
	   	  
	</table>

<?php endwhile; ?> 	





	

