<h3>Eliminar publicación</h3>
</div>

<?php

if (!isset($_SESSION["admin"])) {
	return include("html/deny.html");
}

require 'dbConnect.php';

$doi = $_GET[ "doi" ];
$tipo = $_GET[ "tipo" ];
$tabla='';

if($tipo=="articulo"){
	$tabla="articulos";
}
else if($tipo=="libro"){
	$tabla="libros";
}
else if($tipo=="capitulo"){
	$tabla="cpitulos";
}
else{
	$tabla="conferencias";
}


$res1 = dbConnect( "DELETE FROM $tabla WHERE doi='$doi'" );
$res2 = dbConnect( "DELETE FROM keywords WHERE doi='$doi'" );
$res3 = dbConnect( "DELETE FROM autoresmiembros WHERE doi='$doi'" );
$res4 = dbConnect( "DELETE FROM autoresexternos WHERE doi='$doi'" );


registrarAccion( "Eliminar publicación", $_SESSION[ 'username' ] );


?>



<div id="centro_content">
	<div id="centro_content2">

		<?php if ($res1 == TRUE && $res2 == TRUE && $res3 == TRUE && $res4 == TRUE): ?>
		<p>Se ha eliminado la publicación correctamente <a href="index.php?sec=publicaciones"> Volver</a>
		</p>
		<?php else: ?>
		<p>Es posible que algunos datos de la publicación no se hayan eliminado <a href="index.php?sec=publicaciones"> volver</a> </p>
		<?php endif; ?>



	</div>
</div>
