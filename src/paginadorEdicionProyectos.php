<?php
error_reporting(-1);
ini_set('display_errors', 'On');



require 'dbConnect.php';

$limit = 6;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM proyectos ORDER BY fechacomienzo LIMIT $start_from, $limit";  


$res = dbConnect($sql);

?>

   	<table id="mgusuariosta">
     <tr>
       <th>Código</th>
       <th>Título</th>
       <th>Descripción</th>
       <th>Fecha comienzo</th>
       <th>Fecha fin</th>
       <th>cuantía</th>
       <th>Investigador principal</th>
       <th>Investigadores colaboradores	</th>
       <th>URL</th>
       <th>Acción</th>
     </tr>
     
<?php 
$codpro = $row["codpro"];
?>
	
	<?php while($row = $res->fetch_assoc()) : ?>
	<tr>
      	<td><?php echo($row["codpro"]);?></td>
       	<td><?php echo($row["titulo"]);?></td>
       	<td><?php echo($row["descripcion"]);?></td>
       	<td><?php echo($row["fechacomienzo"]);?></td>
       	<td><?php echo($row["fechafin"]);?></td>
       	<td><?php echo($row["cuantia"]);?></td>
        <td><?php echo($row["investigador"]);?></td>
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

	   Externos:
		<?php
			$sql1 = "SELECT nombrecompleto FROM colaboradoresexternos where codpro='$codpro'";  
			$res1 = dbConnect($sql1);
		?>
			<ul>
			<?php while($row1 = $res1->fetch_assoc()) : ?>
				<li><?php echo($row1["nombrecompleto"]);?></li>
			<?php endwhile; ?> 	
			</ul>
		</td>

        <td><?php echo($row["url"]);?></td>
 
		<td>

			<form id="form1" name="form1" method="post" action="index.php?sec=deleteproyecto&codpro=<?php echo($row["codpro"]);?>" 
			   onsubmit="return confirm('Estas seguro que desea eliminar este proyecto?');">
			  <input type="hidden" name="act" value="run">
			  <input id="btnDelete" name="btnDelete" type="submit" value="Eliminar"/>
			</form>

			<a href="index.php?sec=edituser&user=<?php echo($row["email"]);?>"> <button id="btnEditar">Editar</button> </a>


		</td>
     </tr>
     <?php endwhile; ?> 	
   </table>
