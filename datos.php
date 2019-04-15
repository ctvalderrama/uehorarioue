<?php
	include('conex.php');
	$consultaDatos = mysql_query("SELECT * FROM usuario");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ingreso Horarios</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.3.1.min.css">
	<script src="js/static/jquery.js"></script>
	<script src="js/static/jquery.mobile-1.3.1.min.js"></script>
	<script src="js/login.js"></script>
</head>
<body>
	<section id="login" data-role="page">
		<header data-role="header">
			<h1>Horarios..</h1>
		</header>
		<article data-role="content">
			<form id="form_login">
		        <div data-role="fieldcontain" class="ui-hide-label">
		        	<label for="txtuser">Usuario:</label>
		            <input type="text" name="txtuser" id="txtuser" value="" placeholder="Name" />
		        </div>
		        <div data-role="fieldcontain" class="ui-hide-label">
		        	<label for="txtpassword">Contraseña:</label>
		            <input type="password" name="txtpassword" id="txtpassword" value="" placeholder="Password" />
		        </div>
		        <input type="button" value="Login" id="btnLogin">
		    </form>
		     <!--<div id="errorMsg" style="background-color:red;color: #FFFFFF;">Usuario o Contraseña no valida</div>-->
		</article>
	</section>
	<!-- Aqui nuestro dialog con el mensaje de error  -->
	<section id="pageError" data-role="dialog">
		<header data-role="header">
			<h1>Error</h1>
		</header>
		<article data-role="content">
			<p>Usuario o contraseña no valida</p>
			<a href="#" data-role="button" data-rel="back">Aceptar</a>
		</article>
	</section>
</body>
</html>