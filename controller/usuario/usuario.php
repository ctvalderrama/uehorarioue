<?php
   include "conexion.php";
	session_start();
	$acceso=$_SESSION['username'];
    
    $user_id=null;
                 $sql="SELECT cod_usuario,correo,nom_usuario,promo,tipo,cod_programa FROM usuario WHERE (cod_usuario='$acceso' OR identificacion='$acceso' OR correo='$acceso')";
                  $query = $conexion->query($sql);
                  $linea = null;
                  if($query->num_rows>0){
                  while ($r=$query->fetch_object()){
                  $linea=$r;
                  break;
                    }
                 }

    if ($acceso) { 
    	$tipousuario= ($linea->tipo==1 ? 'Estudiante' : 'Docente');  		  
    }
    else{
          echo '<script>location.href="index.php"</script>';
    }
    $conexion->close(); 
?>