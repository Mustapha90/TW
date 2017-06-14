<?php
error_reporting(-1);
ini_set('display_errors', 'On');
	session_start();
	if(isset($_GET['sec']) && $_GET['sec']=='logout') {
			session_destroy();
  	}
?>

<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- jQuery -->
	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
	<title>GRUPO DE INSVESTIGACION MB</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
</head>


<?php
    if(isset($_GET['sec'])) {
    	$seccion = $_GET['sec'];
    }else{
      $seccion = 'home';
    }	
?>

<body>

	<div id="global">
		<div id="contenido">
			<?php include 'header.php';?>

			<div id="centro">
			
				<?php include 'navbar.php';?>


				<?php include 'contenido.php';?>

		  	</div>
		  	
			<?php include 'footer.php';?>
			
		</div>
	</div>

</body>





</html>

