<?php
//Incluimos las conexion
include_once "conn/conn.php";
//$con = mysqli_connect($port, $usuario, $pass, $dbname) or die(mysqli_last_error());

//Guardamos los datos del formulario
$nombreUsuario = $_POST['nombreUsuario'];
$contraseniaUsuario = $_POST['contraseniaUsuario'];
$contrasenia_cifrado = md5($contraseniaUsuario);

//Realizamos la consulta 
$sql = "SELECT nombreUsuario, contraseniaUsuario, idRol, idUsuario
		  FROM usuario
		  WHERE nombreUsuario ='".$nombreUsuario."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);



//Cerrar las conexiones
mysqli_free_result($result);
mysqli_close($con);


//Condicion para validar si se escribio algo en el formulario antes de envairlo
//O si hay registro en la base de datos
if($row>=1) {

//Condicion para validar las crendenciales
if($contrasenia_cifrado == $row['contraseniaUsuario'] ){
//case para poder verificar las vistas mediante el permiso que tiene el usuario
	switch ($row["idRol"]) {
		case "1":
			//Guardamos en una variable de sesion
			session_start();
			$_SESSION['nombreUsuarioSession'] = $row["nombreUsuario"];
			$_SESSION['permiso'] = $row["idRol"];
			$_SESSION['idUsuarioSession'] = $row["idUsuario"];
		
				echo "Si coinciden";
			
				header("Location: VistaBuscarOficio.php");
			
 		break;
		 case "2":
			//Guardamos en una variable de sesion
			session_start();
			$_SESSION['nombreUsuarioSession'] = $row["nombreUsuario"];
			$_SESSION['permiso'] = $row["idRol"];
		
				echo "Si coinciden";
			
				header("Location: indexAdministrador.php");
			
 		break;
		 case "3":
			//Guardamos en una variable de sesion
			session_start();
			$_SESSION['nombreUsuarioSession'] = $row["nombreUsuario"];
			$_SESSION['permiso'] = $row["idRol"];
		
				echo "Si coinciden";
			
				header("Location: indexAdministrador.php");
			
 		break;

		default:
		echo "Lo siento " . $row["nombreUsuario"] . ", ";
		echo "no tienes el permiso para ver la vista: " . $row["idRol"];
  	}

}else{
	echo "Hubo un error en la contaseña o usuario, intentelo de nuevo";
	header('Location: form_login.php?login=false');
	echo "Hubo un error en la contaseña o usuario, intentelo de nuevo";
}
}else{
	echo"aqui termina";
}

/*

//Comparación de credenciales
if($pass_cifrado == $row['pass_usuario']){

//Guardamos en una variable de sesion
session_start();
$_SESSION['usuario'] = $row;

//Tenemos que crear un atributo de la tabla de usuarios para poder
//asignar privilegios y aqui mismo poner quien va a entrar a que, dependiendo las tablas
//haciendo quiza un case
//$_SESSION['usuario'] = "cesar";

	echo "Si coinciden";
	
	header("Location: modulos/index.php");
} else{
	echo "Hubo un error en la contaseña o usuario, intentelo de nuevo";
	header('Location: form_login.php?login=false');
}


*/
?>
