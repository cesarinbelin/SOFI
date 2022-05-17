<?php
include("panel.php");
/*
session_start();
if($_SESSION['auth'] == true){
$con = pg_connect("port=5432 dbname=biblioteca user=bibliotecario password=web123") or die(pg_last_error());

if($con){
	//echo "se abre la conexióna la BD";
	$query= "select * from consultalibro";	
	$query = pg_query($con,$query) or die(pg_last_error());
	$arreglo =pg_fetch_all($query);
	if($query){
*/

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Sistema de oficios</title>
    </head>
<body>
	<a href ="../vistas/vista01_gral.php">Vista01</a> <br>
	<a href ="../vistas/vista01_gral.php">Vista02</a>
</body>
</html>

<?php 

?>


