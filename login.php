<!DOCTYPE html> 
<html>
<head>
  <meta charset="UTF-8">
  <title>Validacion de usuarios</title>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
</head>

<body> 

<div data-role="page" id="inicio">

	<div data-role="header">
		<h1>Autenticacion de Usuario</h1>
	</div>
    
	<div data-role="content">	
		<form id="formulario" >
      
      			<label> Usuario </label>
      			<input type="text" id="usuario" name="usuario">
      
      			<label> Password </label>
     			<input type="password" id="clave" name="clave" >

      			<input type="submit" value="Login" id="botonLogin">
      
    		</form>		
	</div>
	 
</div>
 
<div data-role="page" id="home">

	<div data-role="header">
		<h1>Bienvenido</h1>
	</div>

	<div data-role="content">	
		<h2> Bienvenido a la aplicacion </h2>
		<h3> Su usuario y password son válidos</h3>
	</div>

</div>

<script>
$('#formulario').submit(function() { 
	
	 
	// recolecta los valores que inserto el usuario
	var datosUsuario = $("#usuario").val()
	var datosPassword = $("#clave").val()
	

	$("#errorMsg").hide();
	$("#btnLogin").click(function(){
		var usu = $("#txtuser").val();
		var pass = $("#txtpassword").val();
		$.post("server/login.php",{ usu : usu, pass : pass},function(respuesta){
			if (respuesta == true) {
        		$.mobile.changePage("#home")
        	}
        	else{
        		$.mobile.changePage('#pageError', 'pop', true, true);
        		/*$("#errorMsg").fadeIn(300);
        		$("#errorMsg").css("display", "block");*/
        	}
		});
  
	})
	return false;
})
	
</script>

</body>
</html>