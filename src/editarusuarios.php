
<h3>Editar usuarios</h3>
</div>
<?php


require 'dbConnect.php';


if (!isset($_SESSION["admin"])) {
	return include("html/deny.html");
}


$limit = 6;
$sql = "SELECT COUNT(*) FROM usuarios";

$res = dbConnect( $sql );

$row = mysqli_fetch_row( $res );
$total_records = $row[ 0 ];
$total_pages = ceil( $total_records / $limit );
?>

<h3>Editar usuarios</h3>
</div>

<div id="centro_content">
	<div id="target-content"></div>

	<?php if ($res->num_rows > 0): ?>
	<div id="center">
		<div id="pagination">

			<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
            		if($i == 1):?>
			<li class='active' id="<?php echo $i;?>">
				<a href='src/paginadorEdicion.php?page=<?php echo $i;?>'>
					<?php echo $i;?>
				</a>
			</li>
			<?php else:?>
			<li id="<?php echo $i;?>">
				<a href='src/paginadorEdicion.php?page=<?php echo $i;?>'>
					<?php echo $i;?>
				</a>
			</li>
			<?php endif;?>


			<?php endfor;endif;?>

		</div>
	</div>

	<script>
		jQuery( document ).ready( function () {
			jQuery( "#target-content" ).load( "src/paginadorEdicion.php?page=1" );
			jQuery( "#pagination li" ).live( 'click', function ( e ) {
				e.preventDefault();
				jQuery( "#pagination li" ).removeClass( 'active' );
				jQuery( this ).addClass( 'active' );
				var pageNum = this.id;
				jQuery( "#target-content" ).load( "src/paginadorEdicion.php?page=" + pageNum );
			} );
		} );
	</script>
	<?php else: ?>
	<p>No hay usuarios registrados...</p>
	<?php endif; ?>
</div>
