<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");
//include_once("function.js");

$idOficio = $_GET['id'];



//Realizamos la consulta para saber la direccion del oficio


$sql1="SELECT direccion FROM oficio WHERE idOficio ='".$idOficio."'";
$result1=mysqli_query($con,$sql1) or die(mysqli_close($con));
$row = mysqli_fetch_assoc($result1);

$direccion = $row['direccion'];


if($con){
	$sql ="DELETE FROM oficio WHERE idOficio ='".$idOficio."'";
	$result =mysqli_query($con,$sql) or die(mysqli_close($con));
	//// Por alguna razon o funciona este update
	
	if($result){
		unlink($direccion);
	echo '<script type="text/javascript">
		     alert("Se Elimino correctamente el oficio");
		     window.location.href="VistaBuscarOficio.php"
		     </script>';
}else{
		echo "<p>No se ejecuto la sentencia SQL </p>";
	}
}


?>