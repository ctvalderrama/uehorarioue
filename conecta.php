<?php

$server = "localhost";
$username = "root";
$password = "root";
$database = "horarios";
$mysqli = new mysqli('$server', '$username', '$password', '$database');
$con = mysql_connect($server, $username, $password) or die ("No se conecto: " . mysql_error());

mysql_select_db($database, $con);

$usu = mysql_real_escape_string($_POST["usu"]);
$pass = mysql_real_escape_string($_POST["pass"]);

$sql = "SELECT nombre FROM usuarios WHERE nombre='$usu' AND password='$pass'";

if ($resultado = mysql_query($sql, $con)){
	if (mysql_num_rows($resultado) > 0){
		echo true;
	}
}
else{
	echo false;
}
mysql_close($con);

?>