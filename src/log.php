<?php

require 'dbConnect.php';

$res = dbConnect("SELECT * FROM acciones ORDER BY fecha DESC , hora DESC");

?>

<h3>Log</h3>
</div>



<div id="centro_content">
  	<?php if ($res->num_rows > 0): ?>
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

	<?php else: ?>
   		 <p>El log está vacío.</p>
	<?php endif; ?>

</div>

