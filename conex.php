<?php
echo 'entra1';


$mysqli = new mysqli("localhost", "root", "usbw", "horarios");

/* comprobar la conexión */
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

$usu = mysql_real_escape_string($_POST["username"]);
$pass = mysql_real_escape_string($_POST["password"]);
echo $usu;

$sql = "SELECT identificacion FROM usuarios WHERE (codigo=$usu or identificacion='$usu' or correo='$usu') AND password='$pass'";
echo $sql;

if ($resultado = $mysqli->query($sql)){
	$row_cnt = mysqli_num_rows($result);

    printf("El resultado tiene %d filas.\n", $row_cnt);
	if ($row_cnt > 0){
		session_start();
		$_SESSION['username'] = $_POST['username'];
		echo true;
	}
}
else{
	$_SESSION['username'] = 'Error';
	echo false;
}
?>