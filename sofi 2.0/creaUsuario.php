<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");



//Guardamos los datos del formulario
$nombreUsuario = $_POST['nombreUsuario'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$cargo = $_POST['cargo'];
$nombreUsuario = $_POST['nombreUsuario'];
$contraseniaUsuario = $_POST['contraseniaUsuario'];
$correo = $_POST['correo'];
$idrol = $_POST['idRol'];
 
if($con){
	//echo "se abre la conexióna la BD";
	$sql="INSERT INTO usuario (nombre, apellidoPaterno, apellidoMaterno, correo, cargo, nombreUsuario, contraseniaUsuario, idRol) 
          VALUES('$nombreUsuario', '$apellidoPaterno', '$apellidoMaterno', '$cargo', '$nombreUsuario', '$contraseniaUsuario', '$correo', '$idrol')";
	$result=mysqli_query($con,$sql) or die(mysqli_close($con));
	
	  if($result){	
		
		echo '<script type ="text/javascript">
		     alert("Se registró correctamente el usuario");
		     window.location.href="usuarios.php";
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