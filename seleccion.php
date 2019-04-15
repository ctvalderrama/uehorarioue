<?php
include ("controller/usuario/usuario.php");
include ("controller/usuario/scripts.php"); 
?>
<!DOCTYPE html>
<html>
	<head><title>Seleccion</title></head>
	<body>
		<section id="login" data-role="page">
			<header data-role="header" align="center">
					<img src="images/uniempresarial.png" width="100%" height="105" align="center">
				 	<div align="center">
				 		<small><a><?php echo $linea->nom_usuario ?>  </br>
				 		<?php echo $tipousuario ?> </a> </small>
			 		</div>			
					<div data-role="navbar">
						<ul>
						    <li><a href="dia.php"  data-transition="pop" >Por Día</a></li>	
					        <li><a href="materia.php" ><?php $mostrar1 = ($linea->tipo==1 ? "Por materia": "Por Programa" ); echo "$mostrar1"; ?></a></li>		        
				        </ul>
					</div>				
			</header>

			<footer data-role="footer" data-id="menu"  data-theme="b" data-position="fixed">
				<nav data-role="navbar">
					<ul>
						<li><a href="menu.php" data-icon="home">Inicio</a></li>
					</ul>
				</nav>
			</footer>
		</section>
	</body>
</html>
