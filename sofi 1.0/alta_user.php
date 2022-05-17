<?php
include ("global/sesiones.php");
include_once "global/conn.php";
include_once "global/conn.php";

$nombre_usuario = $_POST['nombre_usuario'];
$apaterno_usuario = $_POST['apaterno_usuario'];
$amaterno_usuario = $_POST['amaterno_usuario'];
	


 
if($con){
	//echo "se abre la conexióna la BD";
	$sql="INSERT INTO persona (nombre_usuario, apaterno_usuario, amaterno_usuario) 
          VALUES('$nombre_usuario','$apaterno_usuario','$amaterno_usuario')";
	$result=mysqli_query($con,$sql) or die(mysqli_close($con));
	
	  if($result){	
		
		echo '<script type ="text/javascript">
		     alert("Se registró correctamente el usuario");
		     window.location.href="vistas/vista01_personas.php";
		     </script>';	
	}else{
		echo "No se pudo ejecutar la sentencia SQL";
		echo "<a href='form_user.php'> Volver al registro de usuario</a><br/>";	
	}
	
	mysqli_close($con);
}else{
	echo "hubo un error";
}
//realizamos la insercion




?>