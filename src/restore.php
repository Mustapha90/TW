<?php

include 'src/dbconfig.php';

$target_dir    = "backup/";
$server_name   = DB_HOST;
$username      = DB_USER;
$password      = DB_PASSWORD;
$database_name = DB_NAME;

$errorUpload='';
$success=false;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$date_string   = date("dmYhis");
    $file = $date_string . "_" . basename($_FILES["fileToUpload"]["name"]);
	$target_file = $target_dir . $file;

	if(validarFichero($target_file)==0){
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			$cmd = "mysql -h {$server_name} -u {$username} -p{$password} {$database_name} < $target_file";
			echo exec($cmd);
			$success = true;
		} else {
			echo "Error: No se ha podido subir el archivo al servidor en estos momentos!";
		}
	}
}

function validarFichero($target_file){
	global $errorUpload;

	$errores = 0;
	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);


	if ($_FILES["fileToUpload"]["size"] > 500000) {
		$errorUpload = "El tamaño del fichero supera el tamaño máximo.";
		$errores = 1;
	}


	if($fileType != "sql") {
		$errorUpload = "Error: No es un fichero sql!";
		$errores = 1;
	}

	return $errores;
}
?>

<h3>Restaurar Backup</h3>
</div>


<div id="centro_content">
	<?php if($success): ?>
		<h2>La copia de seguridad se ha realizado correctamente!</h2>
	<?php else: ?>
		<form action="" method="post" enctype="multipart/form-data">
			<div id="cont">
				<div id="cont1"> <h4> Restaurar copia de seguridad:</h4> </div>
				<div id="cont2"> <input type="file" name="fileToUpload" id="fileToUpload"> </div>
				<div id="cont3"> <button id="btnbackup">Restaurar</button>	 </div>
			</div>
			<div id="errorLabel"<label for="passError"><?php echo $errorUpload;?></label></div>
		</form>
		    
		    
	<?php endif; ?>
</div>


