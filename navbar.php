<nav id="navbar"> 
	<div id="nav1">
	  <ul>
			<li><a class="active" href="index.php?sec=portada">Principal</a></li>
			<li><a href="index.php?sec=miembros">Miembros</a></li>
			<li><a href="index.php?sec=publicaciones">Publicaciones</a></li>
			<li><a href="index.php?sec=proyectos">Proyectos</a></li>
	  </ul>							
	</div>

	<div id="espacio"></div>
	
	<div id="nav2">
		<ul>
			<li><a href="index.php?sec=addpub" >Añadir pub</a></li>
			<li><a href="index.php?sec=addproyecto">Añadir proyecto</a></li>
		</ul>						
	</div>

	<div id="espacio"></div>
	


	<?php if(isset($_SESSION['loggedin']) and $_SESSION['admin']==1) : ?>
		<div id="nav1">
			<ul>
				<li><a href="index.php?sec=editarusuarios">Editar usuarios</a></li>
				<li><a href="index.php?sec=verlog">Ver log</a></li>
				<li><a href="index.php?sec=backup">Realizar un backup</a></li>
				<li><a href="index.php?sec=restore">Restaurar el backup</a></li>
			</ul>					
		</div>
	<?php endif; ?>






</nav>

				
