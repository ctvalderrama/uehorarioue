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
				 	<div  align="center">
				 		<small><a><?php echo $linea->nom_usuario ?>  </br>
				 		<?php echo $tipousuario ?> </a> </small>
			 		</div>
					
					<div data-role="navbar">
						<ul>
						    <li><a href="#" class="ui-btn-active">Por Día</a></li>	
					        <li><a href="materia.php" ><?php $mostrar1 = ($linea->tipo==1 ? "Por materia": "Por Programa" ); echo "$mostrar1"; ?></a></li>	   
				        </ul>
					</div>								
			</header>

			<article data-role="content">
				<center><p">Seleccione el día del cuál desea consultar el horario</p></center>
				<form action="obdia.php?" method="GET" data-ajax="false">
						<script> $(function() { $('#datepicker').datepicker({dateFormat:'yy-mm-dd'});});</script>					
						<input type="text" name="datepicker" id="datepicker" required="">
						<button  " data-theme="a" type="submit" aria-disabled="false" data-icon="search">Consultar</button>	
				</form> 
			</article>
			<footer data-role="footer" data-id="menu"  data-theme="b" data-position="fixed">
				<nav data-role="navbar">
					<ul>
						<li><a href="menu.php" data-icon="home">Inicio</a></li>
						<li><a href="menu.php" style="color:white;"  data-icon="back" data-transition="pop" >Volver</a></li>
					</ul>
				</nav>
			</footer>
		</section>
	</body>
</html>

