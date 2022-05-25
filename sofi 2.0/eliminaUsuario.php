<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");
//include_once("function.js");

$idUsuario = $_GET['id'];



//sql usuario con el id del url
$sql = "SELECT rol.nombreRol, 
               713utic.idEmpleado, adscripcion, nombre, apellidoPaterno, apellidoMaterno, correo, activo, 
               usuario.idUsuario, nombreUsuario, contraseniaUsuario
FROM 713utic 
INNER JOIN usuario ON 713utic.idEmpleado = usuario.idEmpleado 
INNER JOIN rol ON usuario.idRol = rol.idRol 
        WHERE idUsuario ='".$idUsuario."'";        
$result = mysqli_query($con,$sql) or die(mysqli_close($con));
$row = mysqli_fetch_assoc($result);
$idEmpleado = $row['idEmpleado'];



if($con){
	$sql ="DELETE FROM usuario WHERE idUsuario ='".$idUsuario."'";
	$result =mysqli_query($con,$sql) or die(mysqli_close($con));
	//// Por alguna razon o funciona este update
	$sql1 ="UPDATE 713utic 
	        SET activo = 0
			WHERE idEmpleado = '".$idEmpleado"'";
	$result1 =mysqli_query($con,$sql1) or die(mysqli_close($con));

	if($result){
	echo '<script type="text/javascript">
		     alert("Se Elimino correctamente el usuario");
		     window.location.href="usuarios.php"
		     </script>';
}else{
		echo "<p>No se ejecuto la sentencia SQL </p>";
	}
}


?>