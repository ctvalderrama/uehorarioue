<?php
include ("controller/usuario/scripts.php"); 
?>
<!DOCTYPE html>
<html>

<head>

	<title>Ingreso Horarios</title>

</head>


<body>
	<section id="login" data-role="page">
		<header data-role="header">

<img src="images/uniempresarial.png" width="100%" height="105" align="center">
			<h1>Iniciar sesión</h1>
		</header>
		<div data-role="content">
		<div data-role="fieldcontain">
		<form action="validar.php" method="POST" data-ajax="false">
		<fieldset>
		<div data-role="fieldcontain">
			<label for="name">Usuario :</label>
			<input type="text" name="username" id="username" pattern="[A-Za-z0-9_- -*]{1,35}" required="">
			<label for="password">Contraseña :</label>
			<input id="password" type="password"  pattern="[A-Za-z0-9_- -*]{1,35}" name="password" required="">
		</div>

			<button value="submit-value" name="submit" data-theme="b" type="submit" aria-disabled="false">Acceder</button>
		</div>
		</fieldset>

		</form>
		</div>
		<div data-role="footer" >			
		 		<p style="color:blue;font-size:10"  align="center">Uniempresarial </p>	
		</div>
	</section>
</body>
</html>
