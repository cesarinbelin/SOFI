<?php
include ("../global/sesiones.php");
include("permisos02.php");
echo ("Pagina principal <br>");
print_r("Usuario: " . $_SESSION['usuario']);
echo ("<br>");
print_r("Permiso : " . $_SESSION['permiso']);
echo ("<br>");

?>