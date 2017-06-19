<h3>Eliminar proyecto</h3>
</div>


<?php

if (!isset($_SESSION["admin"])) {
	return include("html/deny.html");
}

require 'dbConnect.php';

$codpro = $_GET[ "codpro" ];

$res1 = dbConnect( "DELETE FROM proyectos WHERE codpro='$codpro'" );
$res2 = dbConnect( "DELETE FROM entidadescolaboradoras WHERE codpro='$codpro'" );
$res3 = dbConnect( "DELETE FROM colaboradoresexternos WHERE codpro='$codpro'" );
$res4 = dbConnect( "DELETE FROM colaboradoresmiembros WHERE codpro='$codpro'" );


registrarAccion( "Eliminar proyecto", $_SESSION[ 'username' ] );


?>


<div id="centro_content">
	<div id="centro_content2">

		<?php if ($res1 == TRUE && $res2 == TRUE && $res3 == TRUE && $res4 == TRUE): ?>
		<p>Se ha eliminado el proyecto correctamente <a href="index.php?sec=proyectos"> Volver</a>
		</p>
		<?php else: ?>
		<p>No se ha podido eliminar el proyecto <a href="index.php?sec=proyectos"> volver</a> </p>
		<?php endif; ?>



	</div>
</div>
