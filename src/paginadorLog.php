<?php
error_reporting(-1);
ini_set('display_errors', 'On');



require 'dbConnect.php';

$limit = 20;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM acciones ORDER BY fecha DESC , hora DESC LIMIT $start_from, $limit";  


$res = dbConnect($sql);

?>

<div id="centro_content">
   	<table id="mgusuariosta">
     <tr>
       <th>Acción</th>
       <th>Usuario</th>
       <th>IP</th>
       <th>Fecha</th>
       <th>Hora</th>
     </tr>
	
	<?php while($row = $res->fetch_assoc()) : ?>
	<tr>
      	<td><?php echo($row["tipo"]);?></td>
       	<td><?php echo($row["email"]);?></td>
       	<td><?php echo($row["ip"]);?></td>
       	<td>
			<?php 
				$fecha=date_create($row["fecha"]);
				echo(date_format($fecha,"d/m/Y"));
			?>
		</td>
       	<td><?php echo($row["hora"]);?></td>
     </tr>
     <?php endwhile; ?> 	
   </table>
</div>
