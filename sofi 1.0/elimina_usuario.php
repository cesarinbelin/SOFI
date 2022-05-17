<?php
include ("global/sesiones.php");
include("vistas/permisos01.php");
include_once "global/conn.php";
$id_persona = $_POST['id'];

if($con){
	$sql ="DELETE FROM persona WHERE id ='".$id_persona."'";
	$result =mysqli_query($con,$sql) or die(mysqli_close($con));
	if($result){
		echo '<script type="text/javascript">
		     alert("Se eliminó el usuario correctamente");
		     window.location.href="vistas/vista01_personas.php";
		     </script>';
	}else{
		echo "<p>No se ejecutó la sentencia SQL</p>";
	}
}else{
	echo "Ocurrio un error";
}
?>