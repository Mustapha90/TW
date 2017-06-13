

<?php

require 'dbConnect.php';

$res = dbConnect("SELECT * FROM usuarios");


?>

<h3>Editar usuarios</h3>
</div>

<div id="centro_content">


	<?php if ($res->num_rows > 0): ?>
   <table>
     <tr>
       <th>Nombre</th>
       <th>Apellidos</th>
       <th>Email</th>
       <th>Departamento</th>
       <th>Dirección</th>
       <th>Teléfono</th>
       <th>Acción</th>
     </tr>
            <?php while($row = $res->fetch_assoc()) : ?>
     <tr>
       <td><?php echo($row["nombre"]);?></td>
       <td><?php echo($row["apellidos"]);?></td>
       <td><?php echo($row["email"]);?></td>
       <td><?php echo($row["departamento"]);?></td>
       <td><?php echo($row["direccion"]);?></td>
       <td><?php echo($row["telefono"]);?></td>
		<td>
<form id="form1" name="form1" method="post" action="index.php?sec=deleteuser&user=<?php echo($row["email"]);?>" 
   onsubmit="return confirm('Estas seguro que desea eliminar este usuario?');">
  <input type="hidden" name="act" value="run">
  <input id="btnDelete" name="btnDelete" type="submit" value="Eliminar"/>
</form>

<form id="form1" name="form1" method="post" action="index.php?sec=edituser&user=<?php echo($row["email"]);?>" 
  <input type="hidden" name="act" value="run">
  <input id="btnDelete" name="btnDelete" type="submit" value="Editar"/>
</form>

		</td>
     </tr>
     <?php endwhile; ?> 	
   </table>

	</div>
     

	<?php else: ?>
   		 <p>No hay resultados.</p>
	<?php endif; ?>


 
</div>

</div>


