<?php

require 'dbConnect.php';

$email = $_GET["user"];
$res = dbConnect("DELETE FROM usuarios WHERE email='$email'");
registrarAccion("Eliminar usuario", $_SESSION['username']);



?>

<h3>Eliminar usuario</h3>
</div>

<div id="centro_content">

	<?php if ($res == TRUE): ?>
		<p>Se ha eliminado el usuario correctamente</p>
	<?php else: ?>
		<p>No se ha podido eliminar el usuario</p>		
	<?php endif; ?>


   
 
</div>




