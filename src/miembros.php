<?php

require 'dbConnect.php';

$res = dbConnect("SELECT * FROM usuarios");





?>

<h3>Miembros del grupo de investigación</h3>
</div>

<div id="centro_content">


	<?php if ($res->num_rows > 0): ?>
            <?php while($row = $res->fetch_assoc()) : ?>
             	<div value="" ><?php echo($row["nombre"]);?></option>
            <?php endwhile; ?>   		

	<?php else: ?>
   		 <p>No hay resultados.</p>
	<?php endif; ?>
	


</div>
