<?php
include ("../global/sesiones.php");
include("permisos01.php");

echo ("Pagina principal <br>");
print_r("Usuario: " . $_SESSION['usuario']);
echo ("<br>");
print_r("Permiso : " . $_SESSION['permiso']);
echo ("<br>"); 


echo "<a href='vista01_personas.php'>Modulo Usuarios</a></br>";

echo "<a href='../oficios/form_upload.php'>Modulo Oficios</a></br>";
 
?>