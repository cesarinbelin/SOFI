<?php
include ("../global/sesiones.php");
include("../vistas/permisos01.php");


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Formulario alta usuario </title>
		<script src="validacion_usuario.js"></script>
		<link rel = "stylesheet" type="text/css" href="css/estilo_form_autor.css"/> 
	</head>
	<body>
		<h1> Formulario de alta de usuario </h1>
		<p> Favor de ingresar los siguientes datos: </p>
		<form name ="alta" id="formulario" action='../alta_user.php' method="post" onsubmit='return validarFormulario()'>

			<label for="nombre_usuario">Nombre: </label>
			<input type="text" name ="nombre_usuario" id ="nombre_usuario"><br/>
			<label for="apaterno_usuario">Apellido Paterno : </label>
			<input type="text" name ="apaterno_usuario" id ="apaterno_usuario"><br/>
			<label for="amaterno_usuario">Apellido Materno:</label>
			<input type="text" name="amaterno_usuario"></br>
			<input type= "submit"  value ="Guardar">
		</form>
	</body>
</html>

<?php
echo "<a href='../vistas/vista01_personas.php'> Ver Todos los usuarios</a></br>";

?>