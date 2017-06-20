<?php


require 'dbConnect.php';



$limit = 2;
$sql = '';
$term = '';
$showfecha = false;
$showtipos = '';

if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
	$_SESSION[ "tipo" ] = $_POST[ 'pub' ];
	$term = $_POST[ 'termino' ];
	$_SESSION[ "termino" ] = $term;

	if ( $_POST[ 'pub' ] == "tipo" ) {
		$tabla = $_POST[ 'tipos' ];
		$_SESSION[ "tabla" ] = $tabla;
		$sql = "SELECT COUNT(doi) FROM (SELECT * FROM $tabla WHERE titulo LIKE '%" . $term . "%') s";
	} else if ( $_POST[ 'pub' ] == "autor" ) {
		$sql = "SELECT COUNT(doi) FROM 
					(SELECT doi FROM autoresexternos WHERE nombrecompleto LIKE '%" . $term . "%' union
	SELECT doi FROM autoresmiembros,usuarios WHERE autoresmiembros.nombrecompleto=usuarios.email and CONCAT_WS(' ', nombre, apellidos) LIKE '%" . $term . "%') s";
	} else if ( $_POST[ 'pub' ] == "fecha" ) {
		$fecha1 = $_POST[ 'fecha1' ];
		$fecha2 = $_POST[ 'fecha2' ];
		$_SESSION[ "fecha1" ] = $fecha1;
		$_SESSION[ "fecha2" ] = $fecha2;




		$sql = "SELECT COUNT(doi) FROM  
	    (SELECT doi, fecha FROM articulos union
		SELECT doi, fecha FROM libros union
		SELECT doi, fecha FROM capitulos union
		SELECT doi, fecha FROM conferencias) s where s.fecha between '$fecha1' and '$fecha2'";
	} else {
		$sql = "SELECT COUNT(doi) FROM (SELECT * FROM keywords WHERE keyword LIKE '%" . $term . "%') s";
	}

} else {
	unset( $_SESSION[ "termino" ] );
	unset( $_SESSION[ "tipo" ] );
	$sql = "SELECT COUNT(doi) FROM  
	    (SELECT doi FROM articulos union
		SELECT doi FROM libros union
		SELECT doi FROM capitulos union
		SELECT doi FROM conferencias) s";
}



$res = dbConnect( $sql );

$row = mysqli_fetch_row( $res );
$total_records = $row[ 0 ];
$total_pages = ceil( $total_records / $limit );

?>

<h3>Publicaciones</h3>
</div>

<div id="centro_content">
	<script src="js/addInput.js"></script>
	<div id="formBusqueda">
		<form action="" method="post" onsubmit="return validarFormBusqueda()">
			<label>Formulario de búsqueda</label><br><br>
			<input type="radio" id="pub" name="pub" value="tipo" <?php if((isset($_POST[ 'pub']) && ($_POST[ 'pub']=="tipo" )) || !isset($_POST[ 'pub'])) echo( "checked");?>> Por tipo
			<input type="radio" id="pub" name="pub" value="autor" <?php if(isset($_POST[ 'pub']) && ($_POST[ 'pub']=="autor" )) { echo( "checked"); $showtipos=false;}?>> Por autor
			<input type="radio" id="pub" name="pub" value="fecha" <?php if(isset($_POST[ 'pub']) && ($_POST[ 'pub']=="fecha" )){ echo( "checked"); $showtipos=false; $showfecha=true;}?>> Por fecha
			<input type="radio" id="pub" name="pub" value="keyword" <?php if(isset($_POST[ 'pub']) && ($_POST[ 'pub']=="keyword" )){ echo( "checked"); $showtipos=false;}?>> Por Palabra clave<br><br>



			<?php if(isset($_POST['pub']) && ($_POST['pub']=="keyword")) : ?>
			<script type="text/javascript">
				$( '#errfecha' ).hide()
			</script>
			<?php endif; ?>


			<p id="errfecha"></p>

			<div class="selectTipos">
				<select name="tipos" id="tipos" <?php if ($showtipos===false){?>style="display:none"<?php } ?>>
			  <option value="articulos">Articulo</option>
			  <option value="capitulos">Capitulo</option>
			  <option value="libros">Libro</option>
			  <option value="conferencias">Conferencia</option>
			</select>
			</div>

			<div name="fechas" id="fechas" <?php if ($showfecha===false){?>style="display:none"
				<?php } ?>>
				<input type="date" id="fecha1" name="fecha1" value="<?php if(isset($_POST['fecha1'])) echo($_POST['fecha1']);?>">
				<input type="date" id="fecha2" name="fecha2" value="<?php if(isset($_POST['fecha2'])) echo($_POST['fecha2']);?>">
			</div>


			<div class="buscar">
				<input type="text" id="termino" name="termino" value="<?php if(isset($_POST['termino'])) echo($_POST['termino']);?>">
				<input type="submit" value="Buscar">
			</div>
		</form>

	</div>

	<h3 id="listpub">Listado de publicaciones</h3>


	<div id="target-content"></div>

	<?php if ($res->num_rows > 0): ?>
	<div id="center">
		<div id="pagination">
			<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
						if($i == 1):?>
			<li class='active' id="<?php echo $i;?>">
				<a href='src/paginadorpubs.php?page=<?php echo $i;?>'>
					<?php echo $i;?>
				</a>
			</li>
			<?php else:?>
			<li id="<?php echo $i;?>">
				<a href='src/paginadorpubs.php?page=<?php echo $i;?>'>
					<?php echo $i;?>
				</a>
			</li>
			<?php endif;?>


			<?php endfor;endif;?>

		</div>
	</div>

	<script>
		jQuery( document ).ready( function () {

			jQuery( "input[name$='pub']" ).change( function () {
				if ( jQuery( this ).val() === 'tipo' ) {
					jQuery( 'div[name=fechas]' ).hide();
					jQuery( 'select[name=tipos]' ).show();
				} else if ( jQuery( this ).val() === 'autor' ) {
					jQuery( 'div[name=fechas]' ).hide();
					jQuery( 'select[name=tipos]' ).hide();
				} else if ( jQuery( this ).val() === 'fecha' ) {
					jQuery( 'select[name=tipos]' ).hide();
					jQuery( 'div[name=fechas]' ).show();
				} else {
					jQuery( 'select[name=tipos]' ).hide();
					jQuery( 'div[name=fechas]' ).hide();
				}

			} );

			jQuery( "#target-content" ).load( "src/paginadorpubs.php?page=1" );
			jQuery( "#pagination li" ).live( 'click', function ( e ) {
				e.preventDefault();
				jQuery( "#pagination li" ).removeClass( 'active' );
				jQuery( this ).addClass( 'active' );
				var pageNum = this.id;
				jQuery( "#target-content" ).load( "src/paginadorpubs.php?page=" + pageNum );
			} );
		} );
	</script>
	<?php else: ?>
	<p>No se encuentran publicaciones..</p>
	<?php endif; ?>
</div>
