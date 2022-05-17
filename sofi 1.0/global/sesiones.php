<?php 
session_start();
//Si las variables de sesion no estan se redirige al login
if(!isset($_SESSION['usuario'])){

    echo "redirigir al login";
    header("Location: ../form_login.php");
}

?>