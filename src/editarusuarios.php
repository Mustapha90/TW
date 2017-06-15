

<?php

require 'dbConnect.php';

$res = dbConnect("SELECT * FROM usuarios");


?>

<h3>Editar usuarios</h3>
</div>

<div id="centro_content">
  	<?php if ($res->num_rows > 0): ?>
   	<table id="mgusuariosta">
     <tr>
       <th>Nombre</th>
       <th>Apellidos</th>
       <th>Email</th>
       <th>Departamento</th>
       <th>Centro</th>
       <th>Dirección</th>
       <th>Teléfono</th>
       <th>Bloqueado</th>
       <th>Admin</th>
       <th>Acción</th>
     </tr>
     
	
	<?php while($row = $res->fetch_assoc()) : ?>
	<tr>
      	<td><?php echo($row["nombre"]);?></td>
       	<td><?php echo($row["apellidos"]);?></td>
       	<td><?php echo($row["email"]);?></td>
       	<td><?php echo($row["departamento"]);?></td>
       	<td><?php echo($row["centro"]);?></td>
       	<td><?php echo($row["direccion"]);?></td>
        <td><?php echo($row["telefono"]);?></td>
       	<td>
			<?php
				if($row["bloqueado"])
					echo("Si");
				else	
					echo("No");
			?>
		</td>
       	<td>
			<?php
				if($row["admin"])
					echo("Si");
				else	
					echo("No");
			?>
		</td>
		<td>

			<form id="form1" name="form1" method="post" action="index.php?sec=deleteuser&user=<?php echo($row["email"]);?>" 
			   onsubmit="return confirm('Estas seguro que desea eliminar este usuario?');">
			  <input type="hidden" name="act" value="run">
			  <input id="btnDelete" name="btnDelete" type="submit" value="Eliminar"/>
			</form>

			<a href="index.php?sec=edituser&user=<?php echo($row["email"]);?>"> <button id="btnEditar">Editar</button> </a>

			<form id="formBloquear" name="formBloquear" method="post" action="index.php?sec=blockuser&user=<?php echo($row["email"]);?>&val=<?php echo($row["bloqueado"]);?>" 
			   onsubmit="return confirm('Estas seguro que desea bloquear el acceso a este usuario?');">
			  <input type="hidden" name="act" value="run">
  					<?php if ($row["bloqueado"]==0): ?>
			  				<button id="btnBloquear">Bloquear</button>
					<?php else: ?>
			  				<button id="btnDesbloquear">Desbloquear</button>
					<?php endif; ?>
			</form>
		</td>
     </tr>
     <?php endwhile; ?> 	
   </table>


	<?php else: ?>
   		 <p>No hay resultados.</p>
	<?php endif; ?>

</div>















