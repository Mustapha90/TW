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


<!--				
			<h4 id="backup_h4">el backup se ha realizado correctamente : <?php /*?> <?php echo $file?> <a href="<?php echo $filename?>"> <?php */?> <button id="btnbackup">Descargar backup</button> </a> </h4>	-->

<div id="centro_content">

	<?php if($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
		<div id="backup_content">
				<div id="backuptext1">  
					<h4>El backup  <?php echo $file?>  se ha realizado correctamente : </h4>
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



