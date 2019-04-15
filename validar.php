<?php
include ("controller/usuario/scripts.php");
include "conexion.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ingreso Horarios</title>
<body>

<?php 

$sql = "SELECT cod_usuario,identificacion,correo,password FROM usuario WHERE (cod_usuario='$_POST[username]' OR identificacion='$_POST[username]' OR correo='$_POST[username]') AND password='$_POST[password]'";


if ($resultado = $conexion->query($sql)){
	$row_cnt = mysqli_num_rows($resultado);
    
		if ($row_cnt > 0){
			session_start();		
			$_SESSION['username'] = $_POST['username'];
			header('Location: menu.php');
		}else{

			$_SESSION['username'] = 'Error';

			print <<<HERE
	
	
			<div data-role="page">

			<div data-role="header" data-position="fixed" class="wow fadeIn">
				
				<h1 class="wow fadeIn" data-wow-delay='0.4s'> Ups... </h1>
			</div>

			<div role="main" class="ui-content wow fadeIn" data-wow-delay="0.2s" data-inset="false">


                <div data-role="content">
                    <p>Usuario o contraseña incorrectos </p>
                    <a href="index.php"  data-role="button" data-inline="true" class="ui-btn ui-btn-primary"><i></i> Volver</a>
                   

                </div>
            </div>

			</div>

		</div>

HERE;
			
		}
}
$conexion->close(); 
?>
</body>
</html>
