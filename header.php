
<div class="header">

  <h1>Grupo de investigación MB</h1>


		<div id="menu">


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
</div>