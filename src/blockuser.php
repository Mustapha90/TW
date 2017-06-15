
<?php

require 'dbConnect.php';

$email = $_GET["user"];
$val = $_GET["val"];
$accion='';

if($val==0){
	$val=1;
	$accion = "bloqueado";
}
else{
	$val =0;
	$accion = "desbloqueado";
}


$sql = "UPDATE usuarios SET bloqueado='$val' WHERE email='$email'";

$res = dbConnect($sql);

registrarAccion("Bloquear usuario", $_SESSION['username']);
?>

<h3>Bloquear usuario</h3>
</div>

<div id="centro_content">

	<?php if ($res == TRUE): ?>
		<p>El usuario <?php echo($email);?> ha sido <?php echo($accion);?> correctamente! <a href="index.php?sec=editarusuarios"> volver</a> </p>
	<?php else: ?>
		<p>No se ha podido bloquear el usuario <?php echo($email);?>! <a href="index.php?sec=editarusuarios"> volver</a> </p>		
	<?php endif; ?>
</div>
