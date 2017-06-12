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
	
	
	<? if (isset($_SESSION['loggedin'])): ?>
 		<p>bienvenido <?php echo $_SESSION['username']; ?><a href="index.php?sec=logout">logout</a> </p>
  		

	<? else: ?>

		<div id="loginform">      	
        	<form action='?sec=login&act=submit' method='post'>			 
        		 <div>
					<input type="text" placeholder="Usuario" name="email" required>
					<input type="password" placeholder="Contraseña" name="password" required>
					<button type="submit">Entrar</button>
			 	 </div>
			</form>
		</div>
		

	<? endif; ?>
	
	

		
			
					
	</div>

</div>	

<div id="submenu">

</div>