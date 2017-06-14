<?php

include 'dbconfig.php';

// Recibimos como parámetro el comando SQL
function dbConnect($consulta_sql) {

    //Creamos una conexion remota
    $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 



    //Comprobamos la conexion
    if ($conexion == FALSE) {
        echo 'Error de conexion remota con la base de datos.';
        exit();
    }

    // Abrimos Base de Datos		
   // mysql_select_db(DB_NAME, $conexion);


    // Ejecutamos el código SQL
    $resultado = mysqli_query( $conexion, $consulta_sql);// or die(mysql_error());


    if ($resultado == FALSE) {
        echo '<br>No se pudo realizar la operación: ' . $consulta_sql . '<br>' . mysqli_error($conexion);        
    }
    
    mysqli_close($conexion);

    // Devolvemos el resultado
    return $resultado;
}


function registrarAccion($tipo, $email) {
	$ip = $_SERVER['REMOTE_ADDR'];
	$fecha =  date("Y-m-d");
	$hora = date("H:i:s");
	$insert = dbConnect("INSERT INTO acciones (email, tipo, ip, fecha, hora) VALUES ('$email','$tipo', '$ip', '$fecha', '$hora')");

	if(!$insert){
		die("No se ha registrado la acción: error 14");
	}
}


?>


