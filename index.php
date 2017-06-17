<?php
error_reporting( -1 );
ini_set( 'display_errors', 'On' );
session_start();
if ( isset( $_GET[ 'sec' ] ) && $_GET[ 'sec' ] == 'logout' ) {
	session_destroy();
}
?>

<!doctype html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- jQuery -->
	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
	<title>GRUPO DE INSVESTIGACION MB</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="css/jquery.multiselect.css" type="text/css" media="screen"/>

</head>


<?php
if ( isset( $_GET[ 'sec' ] ) ) {
	$seccion = $_GET[ 'sec' ];
} else {
	$seccion = 'home';
}
?>

<body>

	<div id="global">
		<div id="contenido">

			<div class="header">
				<?php include 'header.php';?>
			</div>


			<div class="row">

				<div class="col-2 menu">
					<?php include 'navbar.php';?>
				</div>

				<div class="col-10">
					<?php include 'contenido.php';?>
				</div>

			</div>


			<div class="footer">
				<?php include 'footer.php';?>
			</div>

		</div>
	</div>

</body>





</html>