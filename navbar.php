				
<div class="col-2 menu">

  <ul>
	  <ul>
		<li><a class="active" href="index.php?sec=portada">Principal</a></li>
		<li><a href="index.php?sec=miembros">Miembros</a></li>
		<li><a href="index.php?sec=publicaciones">Publicaciones</a></li>
		<li><a href="index.php?sec=proyectos">Proyectos</a></li>
	  </ul>	
  </ul>
  
  	<?php if(isset($_SESSION['loggedin'])) : ?>

	<ul>
		<li><a>Administrar publicaciones</a>
				<ul class="submenu">
					<li><a href="index.php?sec=addpub">Añadir pubublicación</a></li>
					<li><a href="">Editar publicaciones</a></li>
				</ul>		
			</li>
			<li><a>Administrar proyectos</a>
				<ul  class="submenu">
					<li><a href="index.php?sec=addproyecto">Añadir proyecto</a></li>
					<li><a href="">Editar proyectos</a></li>
				</ul>					
			</li>
		</ul>
    <?php endif; ?>
    
	<?php if(isset($_SESSION['loggedin']) and $_SESSION['admin']==1) : ?>

        <div id="nav1">
			<ul class="menu">
				<li><a>Administrar miembros</a>
					<ul class="submenu">
						<li><a href="index.php?sec=adduser">Añadir miembro</a></li>
						<li><a href="index.php?sec=editarusuarios">Editar miembro</a></li>
			  		</ul>
				</li>
				<li><a href="index.php?sec=log">Ver log</a></li>
				<li><a href="index.php?sec=backup">Realizar un backup</a></li>
				<li><a href="index.php?sec=restore">Restaurar el backup</a></li>
			</ul>					
		</div>
  	<?php endif; ?>

</div>

				
