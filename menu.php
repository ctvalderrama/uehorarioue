<?php
include ("controller/usuario/usuario.php");
include ("controller/usuario/scripts.php"); 
?>

<!DOCTYPE html>
<html>
		<head><title>Ingreso</title></head>
	<body>
		<section id="login" data-role="page">

			<header data-role="header" align="center">
				<img src="images/uniempresarial.png" width="100%" height="105" align="center">
				 	<div align="center">
				 		<small><a><?php echo $linea->nom_usuario ?>  </br>
				 		<?php echo $tipousuario ?> </a> </small>
			 		</div>			
			 	<center><h7>Menú Principal</h7></center>
				<div data-role="navbar">
				    <ul>
					    <li><a href="seleccion.php" data-transition="pop">Ver horario</a></li>
				        <li> <a hr<a href="pop/descargar.html" data-rel="dialog" data-transition="pop" > Descargar </a> </li>
					</ul>
				</div>
			</header>

			<footer data-role="footer" data-id="menu"  data-theme="b" data-position="fixed">
				<nav data-role="navbar">
					<ul>
						<li><a href="pop/salir.html" style="color:white;"  data-icon="power" data-transition="pop" >Salir</a></li>
					</ul>
				</nav>
			</footer>
			
		</section>
		
	</body>
</html>