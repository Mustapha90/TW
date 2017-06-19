
<h3>Realizar Backup</h3>
</div>


<?php

if (!isset($_SESSION["admin"])) {
	return include("html/deny.html");
}

include 'src/dbconfig.php';


define( "BACKUP_PATH", "backup/" );

$server_name = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$database_name = DB_NAME;


if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
	$date_string = date( "dmYhis" );
	$file = $date_string . "_" . $database_name . ".sql";
	$filename = BACKUP_PATH . $file;
	$cmd = "mysqldump --routines -h {$server_name} -u {$username} -p{$password} {$database_name} >  {$filename}";
	exec( $cmd );
}

?>





<div id="centro_content">
	<div id="centro_content2">


		<?php if($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
		<div id="backup_content">
			<div id="backuptext1">
				<h4>El backup <u><i style="color:orange"> <?php echo $file?> </i></u> se ha realizado correctamente : </h4>
			</div>

			<a href="<?php echo $filename?>"> <button id="btnbackup">Descargar backup</button> </a>
		</div>
		<?php else: ?>

		<div id="backup_content2">
			<form action="" method="post">
				<div id="backuptext2">
					<h4>Haz click para realizar un backup del sistema: </h4>
				</div>
				<button id="btnbackup">Realizar Backup</button> </h4>
			</form>
		</div>

		<?php endif; ?>



	</div>
</div>
