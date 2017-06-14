<?php

include 'src/dbconfig.php';


define("BACKUP_PATH", "backup/");

$server_name   = DB_HOST;
$username      = DB_USER;
$password      = DB_PASSWORD;
$database_name = DB_NAME;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$date_string   = date("dmYhis");
	$file = $date_string . "_" . $database_name . ".sql";
	$filename = BACKUP_PATH . $file;
	$cmd = "mysqldump --routines -h {$server_name} -u {$username} -p{$password} {$database_name} >  {$filename}";
	exec($cmd);
}

?>



<h3>Realizar Backup</h3>
</div>

<div id="centro_content">

	<?php if($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
		<div id="backup_content">
			 <h4 id="backup_h4">Backup realizado correctamente : <?php echo $file?> <a href="<?php echo $filename?>"> <button id="btnbackup">Descargar backup</button> </a> </h4>
		</div>
	<?php else: ?>
		<form action="" method="post">
  			<input type="submit" value="Realizar Backup">
		</form>
	<?php endif; ?>






 	
</div>



