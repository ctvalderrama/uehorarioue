<?php
include ("controller/usuario/usuario.php");
include ("controller/usuario/scripts.php");
include "conexion.php"; 
?>
<!DOCTYPE html>
<html>
	<head><title>obdia</title></head>
	<body style="margin-left: 0%">
		<section id="login" data-role="page" style="margin-left: 0%">
			<header data-role="header" align="center">
				<img src="images/uniempresarial.png" width="100%" height="105" align="center">
				 	<div align="center">
				 		<small><a><?php echo $linea->nom_usuario ?>  </br>
				 		<?php echo $tipousuario ?> </a> </small>
			 		</div>		

					<div data-role="navbar">
						<ul><li><a href="dia.php" > Nueva Consulta</a></li>	
				        <li><a href="#" class="ui-btn-active" data-transition="pop"><?php $mostrar1 = ($linea->tipo==1 ? "Por día": "Por Programa" ); echo "$mostrar1"; ?></a></li>	</ul></small>
					</div>
			</header>
			<article data-role="content" style="margin-left: 0%">
				<?php
				
				if ($linea->tipo==1){		

										$sql1="SELECT hor.fecha, blo.hora,asi.nom_asignatura,doc.nom_usuario
								          FROM horario hor           
								          JOIN usuario doc ON hor.cod_docente = doc.cod_usuario       
								          JOIN asignatura asi ON asi.cod_asignatura = hor.cod_asignatura
								          JOIN bloque blo ON blo.cod_bloque = hor.cod_bloque
								          WHERE hor.cod_programa='$linea->cod_programa' AND hor.fecha = '$_GET[datepicker]' AND hor.promo = '$linea->promo'  ORDER BY blo.cod_bloque ASC";

		          					}else{
										$sql1="SELECT hor.fecha, blo.hora,asi.nom_asignatura,pro.nomprograma,hor.promo         
								          FROM horario hor                           
								          JOIN asignatura asi ON asi.cod_asignatura = hor.cod_asignatura
								          JOIN bloque blo ON blo.cod_bloque = hor.cod_bloque
								          JOIN programa pro ON pro.cod_programa = asi.cod_programa
								          WHERE hor.cod_docente='$linea->cod_usuario' AND hor.fecha = '$_GET[datepicker]'   ORDER BY blo.cod_bloque ASC";
								          }
					$query= $conexion->query($sql1);
						if($query->num_rows>0){
							   ?> 
							   
								
						<div style="width:100%" style="margin-left: 0%" >

							    <div class='ui-block-a' style="font-size: 80%;width: 26%;margin-left: 0%;float: left;">						    
							    <center><b>Bloque</b> </center>							   		
							    </div>


							    <div class='ui-block-b' style="font-size: 80%;width: 33%;margin-left: 2%;float: left;" >						    				    
							    <center><b>Asignatura</b> </center>							    
							    
								</div>

							    <div class='ui-block-b' style="font-size: 80%;width: 32%;margin-left: 1%;float: left;">
							    
							    <center><b>  <?php $mostrar = ($linea->tipo==1 ? 'Docente': 'Programa' ); echo "$mostrar"; ?> </b> </center>
							   
							    </div>	
						</div>			        
							
				

							 <?php while ($fila = $query->fetch_assoc()) { ?>					    
							  	

						<div style="width:100%" style="margin-left: 0%" >							    
							    <div class='ui-block-a' style="font-size: 70%;width: 26%;margin-left: 0%; float: left;" >							    
							    <center><?php echo "$fila[hora]"; ?> </center>							    
							    </div>

							    <div class='ui-block-b' style="font-size: 70%;width: 30%;margin-left: 2%;float:;border-style: solid;border-top-color: blue;">						    
							    <center> <?php echo "$fila[nom_asignatura]"; ?> </center>							    
							    </div>


							    <div class='ui-block-b' style="font-size: 70%;width: 30%;margin-left: 1%;float: left;">							    
							    <center><?php $mostrar1 = ($linea->tipo==1 ? $fila['nom_usuario']: "$fila[nomprograma] $fila[promo]" ); echo "$mostrar1"; ?> </center>						    
							    </div>	
						</div> 	        
						
						
							  <?php }
							echo "";
						}else{
							  ?>  </br> <small> <center>  <b>No se encontraron clases para ese día </b> </br>  </center> </small> <?php
						      }    
						    $conexion->close();                                  
				?>			
			</article>
			<footer data-role="footer" data-id="menu"  data-theme="b" data-position="fixed">
				<nav data-role="navbar">
					<ul>
						<li><a href="menu.php" data-icon="home">Inicio</a></li>
						<li><a href="dia.php" style="color:white;"  data-icon="back" data-transition="pop" >Volver</a></li>
					</ul>
				</nav>
			</footer>
		</section>
	</body>
</html>

