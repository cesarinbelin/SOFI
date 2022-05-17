<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");


//Agarramos el id que pasamos por la url 
$idUsuario = $_GET['id'];

//Guardamos los datos del formulario
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$correo = $_POST['correo'];
$cargo = $_POST['cargo'];
$nombreUsuario = $_POST['nombreUsuario'];
$contraseniaUsuario = $_POST['contraseniaUsuario'];
$rol = $_POST['idRol'];

if($con){
	$sql="UPDATE usuario 
          SET nombre='".$nombre."',
              apellidoPaterno='".$apellidoPaterno."',
              apellidoMaterno='".$apellidoMaterno."',
			  correo='".$correo."',
              cargo='".$cargo."',
			  nombreUsuario='".$nombreUsuario."',
              contraseniaUsuario='".$contraseniaUsuario."',
              idRol='".$rol."'
		  WHERE idUsuario ='".$idUsuario."'";
	$result= mysqli_query($con,$sql) or die(mysqli_close($con));
	if($result){
		echo '<script type="text/javascript">
		     alert("Se actualizó correctamente el usuario");
		     window.location.href="usuarios.php"
		     </script>';
	}else{
		echo "<p>No se ejecuto la sentencia SQL </p>";
	}

}else{
	echo "Ocurrio un error";
}
?>