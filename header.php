
<div id="cabeceraglobal">
	<div>
		<h1 id="titulo"><span>GRUPO DE INVESTIGACIÓN MB</span></h1>		  			
	</div>

</div>

<div id="menu">
	<div id="menuleft">

		<div id="search">
			<form action="index.php?sec=busqueda" method="get">
				<input type="text"  name="search_text" id="search_text" placeholder="Introduce la búsqueda"/>
				<button type="submit">Buscar</button>
			</form>
		</div>	

  	</div>

	<div id="menuright">

		<div id="menurighterror">			
			<?php  	if(isset($_SESSION['error'])){

						 echo $_SESSION['error'];

						 unset($_SESSION['error']);
					}
			?>
		</div>


	<?php if(isset($_SESSION['loggedin'])): ?>
		<div id="menurightbienvenido">		
 			<span>bienvenido <?php echo $_SESSION['username']; ?></span>
 			<a href="index.php?sec=logout">logout</a> </p>			
		</div>

  		
	<?php else: ?>


		<div id="loginform">      	
        	<form action='?sec=login&act=submit' method='post'>			 
        		 <div>
					<input type="text" placeholder="Usuario" name="email" required>
					<input type="password" placeholder="Contraseña" name="password" required>
					<button type="submit">Entrar</button>
			 	 </div>
			</form>
		</div>
		

	<?php endif; ?>
	
	

		
			
					
	</div>

</div>	

<div id="submenu">

</div>
