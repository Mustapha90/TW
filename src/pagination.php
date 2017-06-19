<?php
error_reporting(-1);
ini_set('display_errors', 'On');



require 'dbConnect.php';

$limit = 4;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
if($page==1){
	$limit=$limit-1;
}

$sql = "SELECT * FROM usuarios where director='1'";  
$res = dbConnect($sql);
$row = $res->fetch_assoc();

$sql1 = "SELECT * FROM usuarios where director!='1' ORDER BY apellidos  LIMIT $start_from, $limit";
$res1 = dbConnect($sql1);
?>

<?php if($page==1):?>

	<div id="ficha_miembro">
		<div id="foto_miembro">
			<img src="<?php echo "images/" . $row["imagen"];?>" alt="foto miembro" style="width:100%;height:100%;">
		</div>
		<div id="info_miembro">
			<ul>
				<li> <label id="info_miembro_label">Nombre:</label> <span>  <?php echo($row["nombre"]);?> </span> </li>
				<li> <label id="info_miembro_label">Apellidos:</label> <span>  <?php echo($row["apellidos"]);?> </span> </li>
				<li> <label id="info_miembro_label">Categoría:</label> <span>  <?php echo($row["categoria"]);?> </span> </li>
				<li> <label id="info_miembro_label">Email:</label> <span>  <?php echo($row["email"]);?> </span> </li>
				<li> <label id="info_miembro_label">URL personal:</label> <span>  <?php echo($row["telefono"]);?> </span> </li>
				<li> <label id="info_miembro_label">Departamento:</label> <span>  <?php echo($row["url"]);?> </span> </li>
				<li> <label id="info_miembro_label">Centro:</label> <span>  <?php echo($row["departamento"]);?> </span> </li>
				<li> <label id="info_miembro_label">Instituto:</label> <span>  <?php echo($row["centro"]);?> </span> </li>
				<li> <label id="info_miembro_label">Dirección:</label> <span>  <?php echo($row["direccion"]);?> </span> </li>
			</ul>
			<label for="director">Director</label>
		</div>			
	</div>

    <?php endif; ?>

  <?php while($row1 = $res1->fetch_assoc()) : ?>
	<div id="ficha_miembro">
		<div id="foto_miembro">
			<img src="<?php echo "images/" . $row1["imagen"];?>" alt="foto miembro" style="width:100%;height:100%;">
		</div>
		<div id="info_miembro">
			<ul>
				<li> <label id="info_miembro_label">Nombre:</label> <span>  <?php echo($row1["nombre"]);?> </span> </li>
				<li> <label id="info_miembro_label">Apellidos:</label> <span>  <?php echo($row1["apellidos"]);?> </span> </li>
				<li> <label id="info_miembro_label">Categoría:</label> <span>  <?php echo($row1["categoria"]);?> </span> </li>
				<li> <label id="info_miembro_label">Email:</label> <span>  <?php echo($row1["email"]);?> </span> </li>
				<li> <label id="info_miembro_label">URL personal:</label> <span>  <?php echo($row1["telefono"]);?> </span> </li>
				<li> <label id="info_miembro_label">Departamento:</label> <span>  <?php echo($row1["url"]);?> </span> </li>
				<li> <label id="info_miembro_label">Centro:</label> <span>  <?php echo($row1["departamento"]);?> </span> </li>
				<li> <label id="info_miembro_label">Instituto:</label> <span>  <?php echo($row1["centro"]);?> </span> </li>
				<li> <label id="info_miembro_label">Dirección:</label> <span>  <?php echo($row1["direccion"]);?> </span> </li>
			</ul>
		</div>			

	</div>
     
     <?php endwhile; ?> 	
</tbody>  
</table>
