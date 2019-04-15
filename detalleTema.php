<?php
	include('php/conex.php');
	$myIdT = $_GET['codT'];
	$sql = mysql_query("SELECT * FROM cursos WHERE id_tema = '$myIdT'");
	$nr = mysql_num_rows($sql);
?>

<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Blog-Code</title>
<link href="jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>Lista de cursos por Tema</h1>
	</div>
	<div data-role="content" align="center">
    <?php
	if( $nr >0 )
	{
		while( $fila = mysql_fetch_array($sql) )
		{
	?>	
        -------------------------------------------------------------------------------------<br />
        <h2>Curso: <?php echo $fila['nombre_curso']; ?></h2>
        <h4>Descripcion del curso</h4>
        <?php echo $fila['ds_curso']; ?>
        <br />
        Valor $<?php echo $fila['valor']; ?>
        <br />		
        <?php } 
	}
	else
	{
		echo "<h2>"."No hay registros para el tema seleccinado"."</h2>";
	}
		?>
        -------------------------------------------------------------------------------------
	</div>
	<div data-role="footer">
		<h4>www.edusoftglobal.com</h4>
	</div>
</div>
</body>
</html>
