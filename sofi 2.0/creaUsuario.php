<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");



//Guardamos los datos del formulario
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$adscripcion = $_POST['adscripcion'];
$correo = $_POST['correo'];
$idUnidad = $_POST['idUnidad'];
$fechaIngreso = $_POST['calendarioFechaIngresoNuevoUsuario'];
$nombreUsuario = $_POST['nombreUsuario'];
$contraseniaUsuario = md5($_POST['contraseniaUsuario']);
$idRol = $_POST['idRol'];
 
if($con){
	//echo "se abre la conexióna la BD";

	//Esta consulta no funcion al 100
	$sql1="INSERT INTO 713utic (adscripcion, nombre, apellidoPaterno, apellidoMaterno,  correo, activo, idUnidad, fechaIngreso) 
          VALUES('$adscripcion', $nombre', '$apellidoPaterno', '$apellidoMaterno', '$correo', 1, '$idUnidad', '$fechaIngreso')";
	$result1=mysqli_query($con,$sql1) or die(mysqli_close($con));
	
	  if($result1){	
		  $sql0="SELECT idEmpleado FROM 713utic 
		  ORDER by idEmpleado DESC
		  LIMIT 1;";
		  $result0=mysqli_query($con,$sql0) or die(mysqli_close($con));
		  $row = mysqli_fetch_assoc($result0);
		  $idEmpleadoUltimo = $row['idEmpleado'];

		  $sql="INSERT INTO usuario (nombreUsuario, contraseniaUsuario, idRol, idEmpleado) 
        	   VALUES('$nombreUsuario', '$contraseniaUsuario', '$idRol', '$idEmpleadoUltimo')";
		  $result=mysqli_query($con,$sql) or die(mysqli_close($con));

		
		echo
			'<script type ="text/javascript">
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