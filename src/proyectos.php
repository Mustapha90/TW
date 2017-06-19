
<?php


require 'dbConnect.php';



$limit = 3;
$sql = "SELECT COUNT(codpro) FROM proyectos";  

$res = dbConnect($sql);

$row = mysqli_fetch_row($res);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit); 
?>


<h3>Listado de proyectos del grupo</h3>
</div>

<div id="centro_content">
<div id="target-content" ></div>

<?php if (!$total_records==0): ?>
		<div id="center">
  			<div id="pagination">  
           			<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
            		if($i == 1):?>
            			<li class='active'  id="<?php echo $i;?>"> <a href='src/paginadorproyectos.php?page=<?php echo $i;?>'> <?php echo $i;?></a></li>
            		<?php else:?>
            			<li id="<?php echo $i;?>"><a href='src/paginadorproyectos.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
        			<?php endif;?>

        			
	<?php endfor;endif;?>

			  </div>
		</div>  

			<script>
				jQuery(document).ready(function() {
				jQuery("#target-content").load("src/paginadorproyectos.php?page=1");
    			jQuery("#pagination li").live('click',function(e){
    			e.preventDefault();
        		jQuery("#pagination li").removeClass('active');
        		jQuery(this).addClass('active');
       			var pageNum = this.id;
        		jQuery("#target-content").load("src/paginadorproyectos.php?page=" + pageNum);
   				 });
   			 });
			</script>
<?php else: ?>
   	<p>No se encuentran proyectos..</p>
<?php endif; ?>
</div>

















