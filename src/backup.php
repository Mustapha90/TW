<?php

include 'src/dbconfig.php';


define("BACKUP_PATH", "backup/");

$server_name   = DB_HOST;
$username      = DB_USER;
$password      = DB_PASSWORD;
$database_name = DB_NAME;
$date_string   = date("dmYhis");
$filename = BACKUP_PATH . $date_string . "_" . $database_name . ".sql";


$cmd = "mysqldump --routines -h {$server_name} -u {$username} -p{$password} {$database_name} >  {$filename}";


exec($cmd);

?>


<h3>Realizar Backup</h3>
</div>

<div id="centro_content">
  <a href="<?php echo $filename?>" >Download</a>
</div>
