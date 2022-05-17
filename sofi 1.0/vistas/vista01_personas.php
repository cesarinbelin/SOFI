<?php
include ("../global/sesiones.php");
include_once "../global/conn.php";

include("permisos01.php");
if($con){
	//echo "se abre la conexióna la BD";
	$sql= "SELECT * FROM persona";	
	$result=mysqli_query($con,$sql) or die(mysqli_close($con));
	//$row =mysqli_fetch_all($result, MYSQLI_ASSOC); 
	if(mysqli_num_rows($result)>0){

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Personas </title>
		<meta name ="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/estilo_form_index.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	</head>
<body>
	<div class="topnav" id="myTopnav">
			<a href ="vista01_gral.php">Inicio</a>
	</div>
   
<h3> Catálogo personas </h3>
<table>
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
		</tr>
	</thead>
	<tbody>
<?php

	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row['nombre_usuario']."</td>";
		echo "<td>".$row['apaterno_usuario']."</td>";
		echo "<td>".$row['amaterno_usuario']."</td>";
		echo "<td><a href='../form/form_edita_usuario.php?id=".$row['id']."'>Editar</a></td>";
		echo "<td><a href='../form/form_elimina_usuario.php?id=".$row['id']."'>Eliminar</a></td>";
		echo "</tr>";
	}
?>	
	</tbody>
</table>
</div>
</body>
</html>
<?php
	echo "<a href='../form/form_user.php'> Nuevo Usuario</a></br>";
	}else{
		echo "No se pudo ejecutar la sentencia SQL";
	}
} else{
	echo "Hubo un error";
}

?>