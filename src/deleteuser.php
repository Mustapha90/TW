
<h3>Eliminar usuario</h3>
</div>

<?php


if (!isset($_SESSION["admin"])) {
	return include("html/deny.html");
}

require 'dbConnect.php';

$email = $_GET[ "user" ];
$res = dbConnect( "DELETE FROM usuarios WHERE email='$email'" );
registrarAccion( "Eliminar usuario", $_SESSION[ 'username' ] );



?>



<div id="centro_content">
	<div id="centro_content2">

		<?php if ($res == TRUE): ?>
		<p>Se ha eliminado el usuario correctamente <a href="index.php?sec=editarusuarios"> volver</a>
		</p>
		<?php else: ?>
		<p>No se ha podido eliminar el usuario <a href="index.php?sec=editarusuarios"> volver</a> </p>
		<?php endif; ?>



	</div>
</div>
