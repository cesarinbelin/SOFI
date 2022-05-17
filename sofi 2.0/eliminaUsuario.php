<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");
//include_once("function.js");

$idUsuario = $_GET['id'];

if($con){
	$sql ="DELETE FROM usuario WHERE idUsuario ='".$idUsuario."'";
	$result =mysqli_query($con,$sql) or die(mysqli_close($con));
	echo '<script type="text/javascript">
		     alert("Se Elimino correctamente el usuario");
		     window.location.href="usuarios.php"
		     </script>';
}else{
		echo "<p>No se ejecuto la sentencia SQL </p>";
	}



?>