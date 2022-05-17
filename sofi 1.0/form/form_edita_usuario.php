<?php
include ("../global/sesiones.php");
include("../vistas/permisos01.php");
include_once "../global/conn.php";


$id_persona = $_GET['id'];
$sql = "SELECT * FROM persona 
        WHERE id ='".$id_persona."'";
$result = mysqli_query($con,$sql) or die(mysqli_close($con));
$row = mysqli_fetch_assoc($result);

echo $id_persona;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Formulario de editar persona </title>
		<script src="validacion_autor.js"></script>
		<link rel="stylesheet" type="text/css" href="css/estilo_form_libro.css"/>
	</head>
	<body>
		<h1> Formulario de edición de personas </h1>
		<p> Favor de editar los  datos que se encuentran erroneamente: </p>
		<form id="formulario" name ="edita_usuario" action="../edita_usuario.php" method="post" onsubmit='return validarFormulario()'>
		<label for ="nombre_usuario"> Nombre : </label>
		<input type="text" name="nombre_usuario" value="<?php echo $row['nombre_usuario'];?>"></br>
		<label for ="apaterno_usuario"> Apellido paterno : </label>
		<input type="text" name="apaterno_usuario" value="<?php echo $row['apaterno_usuario']; ?>"></br>
		<label for="amaterno_usuario"> Apellido materno : </label>
		<input type="text" name="amaterno_usuario" value="<?php echo $row['amaterno_usuario'];?>"></br>
		<input type="hidden" name ="id_usuario" value="<?php echo $row['id'];?>"></br>
		<input type= "submit" value ="Actualizar">
		</form>
	</body>
</html>

<?php


?>
