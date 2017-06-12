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
	<meta charset="UTF-8">
	<title>Grupo de Investigación MB</title>
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
