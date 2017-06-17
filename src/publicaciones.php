<?php


require 'dbConnect.php';



$limit = 2;
$sql = "SELECT COUNT(doi) FROM  
	    (SELECT doi FROM articulos union
		SELECT doi FROM libros union
		SELECT doi FROM capitulos union
		SELECT doi FROM conferencias) s"; 

$res = dbConnect($sql);

$row = mysqli_fetch_row($res);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);

?>

<h3>Publicaciones</h3>
</div>

<div id="centro_content">




			<label>Listado de publicaciones</label>
			
					

<div id="target-content" ></div>

<?php if ($res->num_rows > 0): ?>
		<div id="center">
  			<div id="pagination">  
           			<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
            		if($i == 1):?>
            			<li class='active'  id="<?php echo $i;?>"> <a href='src/paginadorpubs.php?page=<?php echo $i;?>'> <?php echo $i;?></a></li>
            		<?php else:?>
            			<li id="<?php echo $i;?>"><a href='src/paginadorpubs.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
        			<?php endif;?>

        			
	<?php endfor;endif;?>

			  </div>
		</div>  

			<script>
				jQuery(document).ready(function() {
				jQuery("#target-content").load("src/paginadorpubs.php?page=1");
    			jQuery("#pagination li").live('click',function(e){
    			e.preventDefault();
        		jQuery("#pagination li").removeClass('active');
        		jQuery(this).addClass('active');
       			var pageNum = this.id;
        		jQuery("#target-content").load("src/paginadorpubs.php?page=" + pageNum);
   				 });
   			 });
			</script>
<?php else: ?>
   	<p>No se encuentran proyectos..</p>
<?php endif; ?>

</div>

