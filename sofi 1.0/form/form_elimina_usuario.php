<?php
include ("../global/sesiones.php");
include("../vistas/permisos01.php");
include_once "../global/conn.php";

$id_persona = $_GET['id'];
$sql = "SELECT * FROM persona 
        WHERE id ='".$id_persona."'";
$result = mysqli_query($con,$sql) or die(mysqli_close($con));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Formulario de eliminación de usuario </title>
		<meta name="viewport" content ="width=device-width, initial-scale=1"/>
		<!--<script src="js/primero.js"></script>-->
		<link rel="stylesheet" type="text/css" href="css/estilo_form_libro.css"/>
	</head>
	<body>
		<h1> Formulario de eliminación de usuario </h1>
		<p> A continuación se eliminarán los siguientes datos: </p>
		<form name ="baja" id ="formulario" action='../elimina_usuario.php' method="post" >
			<label for="nombre_usuario">Nombre del usuario: </label>
			<?php echo $row['nombre_usuario'];?><br/>
			<label for="apaterno_usuario">Apellido paterno : </label>
			<?php echo $row['apaterno_usuario'];?><br/>
			<label for="amaterno_usuario">Apellido materno:</label>
			<?php echo $row['amaterno_usuario'];?></br>
			<input type ="hidden" name="id" value="<?php echo $row['id'];?>"></br>
			<input type= "submit" onclick= "return confirm('¿Estás seguro de elminiar el usuario? Una vez eliminado no podrá recuperarlo');" value ="Eliminar">
		</form>
	</body>
</html>

<?php

?>