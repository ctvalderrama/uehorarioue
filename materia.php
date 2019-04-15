<?php
include ("controller/usuario/usuario.php");
include ("controller/usuario/scripts.php"); 
include ("conexion.php");
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
						    <li><a href="dia.php" >Por Día</a></li>	
					        <li><a href="materia.php" class="ui-btn-active"><?php $mostrar1 = ($linea->tipo==1 ? "Por materia": "Por Programa" ); echo "$mostrar1"; ?></a></li>	      
				        </ul>
					</div>								
			</header>

			<article data-role="content">
				<center><p">Seleccione el día del cuál desea consultar el horario</p></center>
			
			<form action="obmateria.php" method="GET" data-ajax="false">				
						
						<select name="dato" id='dato' required="">

								<?php	


							if	($linea->tipo==1){ 

									$sql ="SELECT asi.cod_asignatura,asi.nom_asignatura,hor.promo FROM horario hor JOIN asignatura asi ON hor.cod_asignatura = asi.cod_asignatura WHERE hor.promo = '$linea->promo' AND hor.cod_programa = '$linea->cod_programa' GROUP BY hor.cod_asignatura ";
									$query = $conexion->query($sql);													
									if($query->num_rows>0){
										echo "<option  value=''> Seleccione una opción </option>";
						                  while ($r=$query->fetch_object()){
						                  $resul=$r;
						                  echo "<option value='".$resul->cod_asignatura."-".$resul->promo."'> $resul->nom_asignatura </option>";         
						                    }			
						                 }
						               }else {
						               	
									$sql ="SELECT hor.cod_programa,pro.nomprograma,hor.promo FROM horario hor JOIN programa pro ON hor.cod_programa = pro.cod_programa
											WHERE hor.cod_docente = '$linea->cod_usuario' GROUP BY hor.cod_programa";
									$query = $conexion->query($sql);													
									if($query->num_rows>0){
										echo "<option  value=''> Seleccione una opción </option>";
						                  while ($r=$query->fetch_object()){
						                  $resul=$r;
						                  echo "<option value='".$resul->cod_programa."-".$resul->promo."'> $resul->nomprograma $resul->promo </option>";         
						                    }			
						                 }

						               } 						               
						                 $conexion->close();
								?>
						</select>
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

