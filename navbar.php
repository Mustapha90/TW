<nav id="navbar"> 
	<div id="nav1">
	  <ul class="mainmenu">
			<li><a class="active" href="index.php?sec=portada">Principal</a></li>
			<li><a href="index.php?sec=miembros">Miembros</a></li>
			<li><a href="index.php?sec=publicaciones">Publicaciones</a></li>
			<li><a href="index.php?sec=proyectos">Proyectos</a></li>
	  </ul>							
	</div>

	<div id="espacio"></div>
	

	<?php if(isset($_SESSION['loggedin'])) : ?>
	<div id="nav2">
		<ul class="mainmenu">
			<li><a>Administrar publicaciones</a>
				<ul class="submenu">
					<li><a href="index.php?sec=adduser">Añadir pubublicación</a></li>
					<li><a href="">Editar publicaciones</a></li>
				</ul>		
			</li>
			<li><a>Administrar proyectos</a>
				<ul class="submenu">
					<li><a href="index.php?sec=adduser">Añadir proyecto</a></li>
					<li><a href="">Editar proyectos</a></li>
				</ul>					
			</li>
		</ul>						
	</div>
	<?php endif; ?>
	<div id="espacio"></div>
	


	<?php if(isset($_SESSION['loggedin']) and $_SESSION['admin']==1) : ?>
		<div id="nav1">
			<ul class="mainmenu">
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
	

</nav>

				
