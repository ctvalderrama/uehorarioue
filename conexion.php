


<?php
$host='node19.colsat.net'; // nombre del host
$user='ivomark1_root'; //usuario de la db
$pass='7@$5}1}5fAS)'; //contraseña	
$db='ivomark1_horario'; //nombre de la db

	//se hace la conexión a la db
	
	$conexion = mysqli_connect($host, $user, $pass, $db);
	$acentos = $conexion->query("SET NAMES 'utf8'");
