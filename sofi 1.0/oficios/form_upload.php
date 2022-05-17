<?php
include ("../global/sesiones.php");
include("../vistas/permisos01.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Formulario alta oficio </title>
		<script src="validacion_usuario.js"></script>
		<link rel = "stylesheet" type="text/css" href="css/estilo_form_autor.css"/> 
	</head>
	<body>
    <div class="topnav" id="myTopnav">
			<a href ="../vistas/vista01_gral.php">Inicio</a>
	</div>
		<h1> Formulario de alta de oficio </h1>
		<p> Favor de ingresar los siguientes datos: </p>
		


        <form action="upload.php" method="post" enctype="multipart/form-data">

        <label>Sube tu oficio</label>
        <span class="btn btn-default btn-file">
            <input name="oficio" type="file">
        </span>
        <br/><br/>
        <button type="submit" name="submit" class="btn-success">Enviar</button>
    </form>


	</body>
</html>

<?php

echo "<a href='../vistas/vista_oficio2.php'> Ver Todos los oficios</a></br>";
?>