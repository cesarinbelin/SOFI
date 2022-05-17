<?php
//Incluimos las conexion
include_once "global/conn.php";
$con = mysqli_connect($port, $usuario, $pass, $dbname) or die(mysqli_last_error());

//Guardamos los datos del formulario
$usuario = $_POST['nombre'];
$pass = $_POST['pass'];
$pass_cifrado = md5($pass);

//Realizamos la consulta 
$sql = "SELECT username_usuario,pass_usuario, permiso 
		  FROM usuarios
		  WHERE username_usuario ='".$usuario."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);



//Cerrar las conexiones
mysqli_free_result($result);
mysqli_close($con);


//Condicion para validar si se escribio algo en el formulario antes de envairlo
//O si hay registro en la base de datos
if($row>=1) {

//Condicion para validar las crendenciales
if($pass_cifrado == $row['pass_usuario'] ){
//case para poder verificar las vistas mediante el permiso que tiene el usuario
	switch ($row["permiso"]) {
		case "1":
			//Guardamos en una variable de sesion
			session_start();
			$_SESSION['usuario'] = $row["username_usuario"];
			$_SESSION['permiso'] = $row["permiso"];
		
				echo "Si coinciden";
			
				header("Location: vistas/vista01_gral.php");
			
 		break;
		 case "2":
			//Guardamos en una variable de sesion
			session_start();
			$_SESSION['usuario'] = $row["username_usuario"];
			$_SESSION['permiso'] = $row["permiso"];
		
				echo "Si coinciden";
			
				header("Location: vistas/vista02_gral.php");
			
 		break;
		 case "3":
			//Guardamos en una variable de sesion
			session_start();
			$_SESSION['usuario'] = $row["username_usuario"];
			$_SESSION['permiso'] = $row["permiso"];
		
				echo "Si coinciden";
			
				header("Location: vistas/vista03_gral.php");
			
 		break;

		default:
		echo "Lo siento " . $row["username_usuario"] . ", ";
		echo "no tienes el permiso para ver la vista: " . $row["permiso"];
  	}

}else{
	echo "Hubo un error en la contaseña o usuario, intentelo de nuevo";
	header('Location: form_login.php?login=false');
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
