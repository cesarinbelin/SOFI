<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");


//Agarramos el id que pasamos por la url 
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




//Guardamos los datos del formulario
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$correo = $_POST['correo'];
$nombreUsuario = $_POST['nombreUsuario'];
$contraseniaUsuario = md5($_POST['contraseniaUsuario']);
$rol = $_POST['idRol'];
//md5($contraseniaUsuario);



if($con){
	$sql="UPDATE 713utic 
          SET nombre='".$nombre."',
              apellidoPaterno='".$apellidoPaterno."',
              apellidoMaterno='".$apellidoMaterno."',
			  correo='".$correo."'
			  WHERE idEmpleado ='".$idEmpleado."'";
	$result= mysqli_query($con,$sql) or die(mysqli_close($con));


	$sql1="UPDATE usuario 
		   SET nombreUsuario='".$nombreUsuario."',
		       contraseniaUsuario='".$contraseniaUsuario."',
		       idRol='".$rol."'
	       WHERE idUsuario ='".$idUsuario."'";
	$result1= mysqli_query($con,$sql1) or die(mysqli_close($con));

	if($result and $result1){

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