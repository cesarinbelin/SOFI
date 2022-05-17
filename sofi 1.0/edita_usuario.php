<?php
include ("global/sesiones.php");
include("vistas/permisos01.php");
include_once "global/conn.php";


$id_usuario = $_POST['id_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];
$apaterno_usuario = $_POST['apaterno_usuario'];
$amaterno_usuario = $_POST['amaterno_usuario'];

if($con){
	$sql="UPDATE persona 
          SET nombre_usuario='".$nombre_usuario."',
              apaterno_usuario='".$apaterno_usuario."',
              amaterno_usuario='".$amaterno_usuario."'
          WHERE id ='".$id_usuario."'";
	$result= mysqli_query($con,$sql) or die(mysqli_close($con));
	if($result){
		echo '<script type="text/javascript">
		     alert("Se actualizó correctamente el usuario");
		     window.location.href="vistas/vista01_personas.php"
		     </script>';
	}else{
		echo "<p>No se ejecuto la sentencia SQL </p>";
	}

}else{
	echo "Ocurrio un error";
}
?>